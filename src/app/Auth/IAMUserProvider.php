<?php

namespace App\Auth;

use BadMethodCallException;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Contracts\Auth\UserProvider;

class IAMUserProvider implements UserProvider
{
    protected $model;

    public function __construct($model)
    {
        $this->model = $model;
    }

    public function retrieveByCredentials(array $credentials)
    {
        $class = '\\' . ltrim($this->model, '\\');
        $credentials['id'] = $credentials['sub'];

        return new $class($credentials);
    }

    /**
     * @SuppressWarnings("unused")
     */
    public function retrieveById($identifier)
    {
        throw new BadMethodCallException('Unexpected method [retrieveById] call');
    }

    /**
     * @SuppressWarnings("unused")
     */
    public function retrieveByToken($identifier, $token)
    {
        throw new BadMethodCallException('Unexpected method [retrieveByToken] call');
    }

    /**
     * @SuppressWarnings("unused")
     */
    public function updateRememberToken(Authenticatable $user, $token)
    {
        throw new BadMethodCallException('Unexpected method [updateRememberToken] call');
    }

    /**
     * @SuppressWarnings("unused")
     */
    public function validateCredentials(Authenticatable $user, array $credentials)
    {
        throw new BadMethodCallException('Unexpected method [validateCredentials] call');
    }
}
