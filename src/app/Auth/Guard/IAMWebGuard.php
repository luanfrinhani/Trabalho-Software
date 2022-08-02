<?php

namespace App\Auth\Guard;

use App\Model\Core\IAMToken;
use App\Service\Base\IAMService;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\UserProvider;
use Illuminate\Http\Request;

class IAMWebGuard implements Guard
{
    protected $provider;
    protected $request;
    protected $keycloakService;
    protected $user;

    public function __construct(UserProvider $provider, Request $request, IAMService $keycloakService)
    {
        $this->provider = $provider;
        $this->request = $request;
        $this->keycloakService = $keycloakService;
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
            $this->authenticate();
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
        if (empty($credentials['access_token']) || empty($credentials['id_token'])) {
            return false;
        }

        $credentials['refresh_token'] = $credentials['refresh_token'] ?? '';
        $this->keycloakService->saveToken($credentials);

        return $this->authenticate();
    }

    public function setUser(Authenticatable $user)
    {
        $this->user = $user;
    }

    protected function authenticate(): bool
    {
        $message = $this->keycloakService->retrieveToken();
        if ($message->isError()) {
            return false;
        }
        $credentials = $message->getData();

        if (empty($credentials)) {
            return false;
        }

        $message = $this->keycloakService->getUserProfile($credentials);
        if ($message->isError()) {
            return false;
        }
        $user = $message->getData();

        if (empty($user)) {
            $this->keycloakService->forgetToken();

            return false;
        }

        $user = $this->provider->retrieveByCredentials($user);
        $this->setUser($user);

        return true;
    }

    public function hasRole($roles, $resource = ''): bool
    {
        if (empty($resource)) {
            $resource = $this->keycloakService->getClientId();
        }

        if (!$this->check()) {
            return false;
        }

        $message = $this->keycloakService->retrieveToken();
        if ($message->isError()) {
            return false;
        }
        $token = $message->getData();

        if (empty($token) || empty($token['access_token'])) {
            return false;
        }

        $token = new IAMToken($token);
        $token = $token->parseAccessToken();

        //Usado para saber se tem a role no client
        //$resourceRoles = $token['resource_access'] ?? [];
        //$resourceRoles = $resourceRoles[$resource] ?? [];
        $resourceRoles = $token['realm_access'] ?? [];
        $resourceRoles = $resourceRoles['roles'] ?? [];

        return empty(array_diff((array) $roles, $resourceRoles));
    }
}
