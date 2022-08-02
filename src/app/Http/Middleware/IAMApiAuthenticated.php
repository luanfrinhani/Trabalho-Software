<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\Middleware\Authenticate;

class IAMApiAuthenticated extends Authenticate
{
    /**
     * @SuppressWarnings("unused")
     */
    protected function redirectTo($request)
    {
        return route('login', ['locale' => app()->getLocale()]);
    }
}
