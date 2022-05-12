<?php

namespace App\Auth\Guard;

use App\Model\Core\IAMToken;
use App\Service\Base\IAMService;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\UserProvider;
use Illuminate\Http\Request;

class IAMApiGuard implements Guard
{
    protected $provider;
    protected $request;
    protected $keycloakService;
    protected $user;

    protected $decodedToken;

    public function __construct(UserProvider $provider, Request $request, IAMService $keycloakService)
    {
        $this->provider = $provider;
        $this->request = $request;
        $this->keycloakService = $keycloakService;
        $this->decodedToken = null;

        $this->validate(['access_token' => $this->request->bearerToken()]);
    }

    public function check(): bool
    {
        return (bool)$this->user();
    }

    public function guest(): bool
    {
        return !$this->check();
    }

    public function user(): ?Authenticatable
    {
        if (empty($this->user)) {
            return null;
        }

        return $this->user;
    }

    public function id()
    {
        $user = $this->user();

        return $user->id ?? null;
    }

    public function validate(array $credentials = []): bool
    {
        if (empty($credentials['access_token'])) {
            return false;
        }

        $credentials['refresh_token'] = $credentials['refresh_token'] ?? '';
        $credentials['id_token'] = $credentials['id_token'] ?? '';

        return $this->authenticate($credentials);
    }

    public function setUser(Authenticatable $user)
    {
        $this->user = $user;
    }


    protected function authenticate(array $crendetials): bool
    {
        $message = $this->keycloakService->getUserProfile($crendetials);
        if ($message->isError()) {
            return false;
        }
        $user = $message->getData();

        if (empty($user)) {
            return false;
        }

        $user = $this->provider->retrieveByCredentials($user);
        $this->setUser($user);

        return true;
    }

    public function hasRole($request, $roles, $resource = ''): bool
    {
        if (empty($resource)) {
            $resource = $this->keycloakService->getClientId();
        }

        if (!$this->check()) {
            return false;
        }

//        dd($request->bearerToken());

//        $message = $this->keycloakService->retrieveToken();
//        if ($message->isError()) {
//            return false;
//        }
//        $token = $message->getData();
        $token = [];
        $token['access_token'] = $request->bearerToken();

        if (empty($token) || empty($token['access_token'])) {
            return false;
        }

        $token = new IAMToken($token);
        $token = $token->parseAccessToken();

//        $resourceRoles = $token['resource_access'] ?? [];
//        $resourceRoles = $resourceRoles[$resource] ?? [];
//        $resourceRoles = $resourceRoles['roles'] ?? [];
        $resourceRoles = $token['realm_access'] ?? [];
        $resourceRoles = $resourceRoles['roles'] ?? [];

        return empty(array_diff((array) $roles, $resourceRoles));
    }
}
