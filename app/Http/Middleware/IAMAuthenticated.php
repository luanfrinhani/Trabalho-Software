<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate;

class IAMAuthenticated extends Authenticate
{
    /**
     * @SuppressWarnings("unused")
     */
    protected function redirectTo($request)
    {
        return route('login', ['locale' => app()->getLocale()]);
    }
}
