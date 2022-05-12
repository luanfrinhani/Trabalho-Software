<?php

namespace App\Model\Core;

use Exception;

class IAMToken
{
    protected $accessToken;
    protected $refreshToken;
    protected $idToken;
    protected $expires;

    public function __construct(array $data = [])
    {
        if (!empty($data['access_token'])) {
            $this->accessToken = $data['access_token'];
        }

        if (!empty($data['refresh_token'])) {
            $this->refreshToken = $data['refresh_token'];
        }

        if (!empty($data['id_token'])) {
            $this->idToken = $data['id_token'];
        }

        if (!empty($data['expires_in'])) {
            $this->expires = (int)$data['expires_in'];
        }
    }

    public function getAccessToken()
    {
        return $this->accessToken;
    }

    public function getRefreshToken()
    {
        return $this->refreshToken;
    }

    public function getIdToken()
    {
        return $this->idToken;
    }

    public function hasExpired(): bool
    {
        $exp = $this->parseAccessToken();
        $exp = $exp['exp'] ?? '';

        return time() >= (int)$exp;
    }

    public function validateIdToken(array $claims)
    {
        $token = $this->parseIdToken();

        if (empty($token)) {
            throw new Exception('ID Token is invalid.');
        }

        $default = [
            'exp' => 0,
            'aud' => '',
            'iss' => '',
        ];

        $token = array_merge($default, $token);
        $claims = array_merge($default, $claims);

        if (time() >= (int)$token['exp']) {
            throw new Exception('ID Token already expired.');
        }

        if (empty($claims['iss']) || $claims['iss'] !== $token['iss']) {
            throw new Exception('Access Token has a wrong issuer: must contain issuer froom OpenId');
        }

        $this->validateIdTokenAudience($token, $claims);
    }

    protected function validateIdTokenAudience(array $token, array $claims): void
    {
        $audience = (array)$token['aud'];
        if (empty($claims['aud']) || ! in_array($claims['aud'], $audience, true)) {
            throw new Exception('Access Token has a wrong audience: must contain clientId.');
        }

        if (count($audience) > 1 && empty($token['azp'])) {
            throw new Exception('Access Token has a wrong audience: must contain azp claim');
        }

        if (!empty($token['azp']) && $claims['aud'] !== $token['azp']) {
            throw new Exception('Access Token has a wrong audience: haz azp but is not the clientId');
        }
    }

    public function validateSub($userSub): bool
    {
        $sub = $this->parseIdToken();
        $sub = $sub['sub'] ?? '';

        return $sub === $userSub;
    }

    public function parseAccessToken(): array
    {
        return $this->parseToken($this->accessToken);
    }

    public function parseIdToken(): array
    {
        return $this->parseToken($this->idToken);
    }

    public function parseToken(string $token): array
    {
        $token = explode('.', $token);
        $token = $this->base64UrlDecode($token[1]);

        return json_decode($token, true);
    }

    protected function base64UrlDecode(string $data): string
    {
        return base64_decode(
            str_pad(
                strtr($data, '-_', '+/'),
                strlen($data) % 4,
                '=',
                STR_PAD_RIGHT
            )
        );
    }
}
