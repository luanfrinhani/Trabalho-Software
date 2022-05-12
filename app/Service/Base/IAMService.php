<?php

namespace App\Service\Base;

use App\Model\Core\IAMToken;
use App\Model\Core\Message;
use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Session;

abstract class IAMService
{
    protected const IAM_SESSION = '_iam_token';
    protected const IAM_SESSION_STATE = '_iam_state';

    protected $baseUrl;
    protected $realm;
    protected $clientId;
    protected $clientSecret;
    protected $openId;
    protected $cacheOpenId;
    protected $callbackUrl;
    protected $redirectLogout;
    protected $state;
    protected $httpClient;
    protected $message;

    public function __construct()
    {
        $this->message = new Message();

        $this->baseUrl = trim($this->baseUrl(), '/');

        $this->realm = $this->realm();

        $this->clientId = $this->clientId();

        $this->clientSecret = $this->clientSecret();

        $this->cacheOpenId = $this->cacheOpenId();

        $this->callbackUrl = $this->callbackUrl();

        $this->redirectLogout = $this->redirectLogout();

        $message = $this->generateRandomState();
        $this->state = $message->getData();

        $this->httpClient = new Client($this->requestOptions());
    }

    public function getClientId(): string
    {
        return $this->clientId;
    }

    public function getLoginUrl(): Message
    {
        $message = $this->getOpenIdValue('authorization_endpoint');
        if ($message->isError()) {
            return $message;
        }

        $url = $message->getData();

        $params = [
            'scope' => 'openid',
            'response_type' => 'code',
            'client_id' => $this->clientId,
            'redirect_uri' => $this->callbackUrl,
            'state' => $this->state,
        ];

        return $this->buildUrl($url, $params);
    }

    public function getLogoutUrl(): Message
    {
        $message = $this->getOpenIdValue('end_session_endpoint');
        if ($message->isError()) {
            return $message;
        }

        $url = $message->getData();

        if (empty($this->redirectLogout)) {
            $this->redirectLogout = $this->redirectLogout();
        }

        $params = [
            'client_id' => $this->clientId,
            'redirect_uri' => $this->redirectLogout,
        ];

        return $this->buildUrl($url, $params);
    }

    public function getRegisterUrl(): Message
    {
        $message = $this->getLoginUrl();
        if ($message->isError()) {
            return $message;
        }

        $url = $message->getData();
        $url = str_replace('/auth?', '/registrations?', $url);

        return $this->message->success(trans('system.messages.success'), $url);
    }

    public function callback(array $data): Message
    {
        if (Arr::has($data, 'error')) {
            $error = $data['error_description'];
            $error = ($error) ?: $data['error'];

            return $this->message->error($error, null, null);
        }

        $state = $data['state'];
        $message = $this->validateState($state);

        if (empty($state) || $message->isError()) {
            $this->forgetState();

            return $this->message->error(trans('iam.messages.invalid_state'), null, null);
        }

        $code = $data['code'];
        if (empty($code)) {
            return $this->message->error(trans('iam.messages.invalid_code'), null, null);
        }

        $message = $this->getAccessToken($code);
        if ($message->isError()) {
            return $message;
        }
        $token = $message->getData();

        return $this->message->success(trans('system.messages.success'), $token);
    }

    public function getAccessToken(string $code): Message
    {
        $message = $this->getOpenIdValue('token_endpoint');
        if ($message->isError()) {
            return $message;
        }
        $url = $message->getData();

        $params = [
            'code' => $code,
            'client_id' => $this->clientId,
            'grant_type' => 'authorization_code',
            'redirect_uri' => $this->callbackUrl,
        ];

        if (!empty($this->clientSecret)) {
            $params['client_secret'] = $this->clientSecret;
        }

        $token = [];

        try {
            $response = $this->httpClient->post($url, ['form_params' => $params]);

            if ($response->getStatusCode() === 200) {
                $token = $response->getBody()->getContents();
                $token = json_decode($token, true);
            }

            return $this->message->success(trans('system.messages.success'), $token);
        } catch (GuzzleException $e) {
            return $this->message->error($e->getMessage(), null, null);
        }
    }

    public function clientAccessToken(): Message
    {
        $message = $this->getOpenIdValue('token_endpoint');
        if ($message->isError()) {
            return $message;
        }
        $url = $message->getData();

        $params = [
            'client_id' => $this->clientId,
            'grant_type' => 'client_credentials',
        ];

        if (!empty($this->clientSecret)) {
            $params['client_secret'] = $this->clientSecret;
        }

        $token = [];

        try {
            $response = $this->httpClient->post($url, ['form_params' => $params]);

            if ($response->getStatusCode() === 200) {
                $token = $response->getBody()->getContents();
                $token = json_decode($token, true);
            }

            return $this->message->success(trans('system.messages.success'), $token);
        } catch (GuzzleException $e) {
            return $this->message->error($e->getMessage(), null, null);
        }
    }

    public function refreshAccessToken(array $credentials): Message
    {
        if (empty($credentials)) {
            return $this->message->error(trans('iam.messages.was_not_to_do_refresh_token'), null, null);
        }

        $message = $this->getOpenIdValue('token_endpoint');
        if ($message->isError()) {
            return $message;
        }

        $url = $message->getData();
        $params = [
            'client_id' => $this->clientId,
            'grant_type' => 'refresh_token',
            'refresh_token' => $credentials['refresh_token'],
            'redirect_uri' => $this->callbackUrl,
        ];

        if (!empty($this->clientSecret)) {
            $params['client_secret'] = $this->clientSecret;
        }

        $token = [];

        try {
            $response = $this->httpClient->post($url, ['form_params' => $params]);

            if ($response->getStatusCode() === 200) {
                $token = $response->getBody()->getContents();
                $token = json_decode($token, true);
            }

            return $this->message->success(trans('system.messages.success'), $token);
        } catch (GuzzleException $e) {
            return $this->message->error($e->getMessage(), null, null);
        }
    }

    public function invalidateRefreshToken(string $refreshToken): Message
    {
        $message = $this->getOpenIdValue('end_session_endpoint');
        if ($message->isError()) {
            return $message;
        }

        $url = $message->getData();
        $params = [
            'client_id' => $this->clientId,
            'refresh_token' => $refreshToken
        ];

        if (!empty($this->clientSecret)) {
            $params['client_secret'] = $this->clientSecret;
        }

        try {
            $response = $this->httpClient->post($url, ['form_params' => $params]);

            if ($response->getStatusCode() !== 204) {
                return $this->message->error(trans('iam.messages.was_not_to_do_refresh_token'), false, null);
            }

            return $this->message->success(trans('system.messages.success'), true);
        } catch (GuzzleException $e) {
            return $this->message->error($e->getMessage(), null, null);
        }
    }

    public function getUserProfile(array $credentials): Message
    {
        $message = $this->refreshTokenIfNeeded($credentials);
        if ($message->isError()) {
            return $message;
        }
        $credentials = $message->getData();
        $user = [];

        try {
            $token = new IAMToken($credentials);
            if (empty($token->getAccessToken())) {
                return $this->message->error(trans('iam.messages.access_token_invalid'), null, null);
            }

            $message = $this->getOpenIdValue('issuer');
            if ($message->isError()) {
                return $message;
            }
            $iss = $message->getData();

            $claims = [
                'aud' => $this->clientId,
                'iss' => $iss
            ];

            if (!empty($token->getIdToken())) {
                $token->validateIdToken($claims);
            }

            $message = $this->getOpenIdValue('userinfo_endpoint');
            if ($message->isError()) {
                return $message;
            }

            $url = $message->getData();
            $headers = [
                'Authorization' => 'Bearer ' . $token->getAccessToken(),
                'Accept' => 'application/json',
            ];

            $response = $this->httpClient->get($url, ['headers' => $headers]);

            if ($response->getStatusCode() !== 200) {
                return $this->message->error(trans('iam.messages.was_not_able_too_get_userinfo'), null, null);
            }

            $user = $response->getBody()->getContents();
            $user = json_decode($user, true);

            if (!empty($token->getIdToken())) {
                $token->validateSub($user['sub'] ?? '');
            }

            return $this->message->success(trans('system.messages.success'), $user);
        } catch (GuzzleException $e) {
            return $this->message->error($e->getMessage(), null, null);
        } catch (Exception $e) {
            return $this->message->error($e->getMessage(), null, null);
        }
    }

    protected function getOpenIdValue(string $key): Message
    {
        if (!$this->openId) {
            $message = $this->getOpenIdConfiguration();

            if ($message->isError()) {
                return $message;
            }

            $this->openId = $message->getData();
        }

        $data = Arr::get($this->openId, $key);
        return $this->message->success(trans('system.messages.success'), $data);
    }

    protected function getOpenIdConfiguration(): Message
    {
        $cacheKey = 'iam_web_guard_openid-' . $this->realm . '-' . md5($this->baseUrl);

        if ($this->cacheOpenId) {
            $configuration = Cache::get($cacheKey, []);

            if (!empty($configuration)) {
                return $this->message->success(trans('system.messages.success'), $configuration);
            }
        }

        $url = $this->baseUrl . '/realms/' . $this->realm;
        $url = $url . '/.well-known/openid-configuration';

        $configuration = [];

        try {
            $response = $this->httpClient->get($url);

            if ($response->getStatusCode() === 200) {
                $configuration = $response->getBody()->getContents();
                $configuration = json_decode($configuration, true);
            }

            if ($this->cacheOpenId) {
                Cache::put($cacheKey, $configuration, $this->cacheOpenIdTtl());
            }

            return $this->message->success(trans('system.messages.success'), $configuration);
        } catch (GuzzleException $e) {
            return $this->message->error(
                trans('iam.messages.was_not_possible_load_openid_configuration') . $e->getMessage(),
                null,
                null
            );
        }
    }

    protected function refreshTokenIfNeeded(array $credentials): Message
    {
        if (!is_array($credentials) || empty($credentials['access_token'])) {
            return $this->message
                ->error(
                    trans('iam.messages.credentials_with_invalid_format'),
                    $credentials,
                    null
                );
        }

        if (!is_array($credentials) || empty($credentials['refresh_token'])) {
            return $this->message->warning(trans('iam.messages.was_not_to_do_refresh_token'), $credentials, null);
        }

        try {
            $token = new IAMToken($credentials);

            if (!$token->hasExpired()) {
                return $this->message->success(trans('system.messages.success'), $credentials);
            }

            $message = $this->refreshAccessToken($credentials);
            if ($message->isError()) {
                return $message;
            }
            $credentials = $message->getData();

            if (empty($credentials['access_token'])) {
                $this->forgetToken();
                return $this->message->error(trans('iam.messages.was_not_to_do_refresh_token'), [], null);
            }

            $this->saveToken($credentials);

            return $this->message->success(trans('system.messages.success'), $credentials);
        } catch (Exception $e) {
            return $this->message->error($e->getMessage(), $credentials, null);
        }
    }

    public function retrieveToken(): Message
    {
        $token = Session::get($this->iamSession() . self::IAM_SESSION);
        return $this->message->success(trans('system.messages.success'), $token);
    }


    public function saveToken(array $credentials): Message
    {
        Session::put($this->iamSession() . self::IAM_SESSION, $credentials);
        Session::save();

        return $this->message->success(trans('system.messages.success'), $credentials);
    }

    public function forgetToken(): Message
    {
        Session::forget($this->iamSession() . self::IAM_SESSION);
        Session::save();

        return $this->message->success(trans('system.messages.success'), null);
    }

    public function validateState(string $state): Message
    {
        $challenge = Session::get($this->iamSession() . self::IAM_SESSION_STATE);

        if ((!empty($state) && !empty($challenge) && $challenge === $state) == false) {
            return $this->message->error(trans('iam.messages.invalid_state'), false, null);
        }

        return $this->message->success(trans('system.messages.success'), true);
    }

    public function saveState(): Message
    {
        Session::put($this->iamSession() . self::IAM_SESSION_STATE, $this->state);
        Session::save();

        return $this->message->success(trans('system.messages.success'), null);
    }

    public function forgetState(): Message
    {
        Session::forget($this->iamSession() . self::IAM_SESSION_STATE);
        Session::save();

        return $this->message->success(trans('system.messages.success'), null);
    }

    protected function buildUrl(string $url, array $params): Message
    {
        $parseUrl = parse_url($url);
        if (empty($parseUrl['host'])) {
            $url = trim($url, '?') . '?' . Arr::query($params);
            return $this->message->success(trans('system.messages.success'), $url);
        }

        if (!empty($parseUrl['port'])) {
            $parseUrl['host'] .= ':' . $parseUrl['port'];
        }

        $parseUrl['scheme'] = (empty($parseUrl['scheme'])) ? 'https' : $parseUrl['scheme'];
        $parseUrl['path'] = (empty($parseUrl['path'])) ? '' : $parseUrl['path'];

        $url = $parseUrl['scheme'] . '://' . $parseUrl['host'] . $parseUrl['path'];
        $query = [];

        if (!empty($parseUrl['query'])) {
            $parseUrl['query'] = explode('&', $parseUrl['query']);

            foreach ($parseUrl['query'] as $value) {
                $value = explode('=', $value);

                if (count($value) < 2) {
                    continue;
                }

                $key = array_shift($value);
                $value = implode('=', $value);

                $query[$key] = urlencode($value);
            }
        }

        $query = array_merge($query, $params);

        $url = $url . '?' . Arr::query($query);

        return $this->message->success(trans('system.messages.success'), $url);
    }

    protected function generateRandomState(): Message
    {
        try {
            $random = bin2hex(random_bytes(16));
            return $this->message->success(trans('system.messages.success'), $random);
        } catch (Exception $e) {
            return $this->message->error($e->getMessage(), null, null);
        }
    }

    abstract protected function baseUrl(): string;

    abstract protected function realm(): string;

    abstract protected function clientId(): string;

    abstract protected function clientSecret(): string;

    abstract protected function cacheOpenId(): bool;

    abstract protected function cacheOpenIdTtl(): int;

    abstract protected function callbackUrl(): string;

    abstract protected function redirectLogout(): string;

    abstract protected function requestOptions(): array;

    abstract protected function iamSession(): string;

    abstract protected function mapUserToObject(Collection $collection): Collection;
}
