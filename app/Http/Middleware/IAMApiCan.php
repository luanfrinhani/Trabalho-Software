<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Support\Facades\Auth;

class IAMApiCan extends IAMApiAuthenticated
{
    protected function redirectTo($request)
    {
        if (empty(Auth::user())) {
            if ($request->wantsJson()) {
                throw new AuthenticationException('Unauthenticated.');
            }
            return parent::redirectTo($request);
        }

        abort(403);
    }

    public function handle($request, Closure $next, ...$guards)
    {
        if (empty($guards) && Auth::guard('api')->check()) {
            return $next($request);
        }

        $guards = explode('|', ($guards[0] ?? ''));

        if (Auth::guard('api')->hasRole($request, $guards)) {
            return $next($request);
        }

        throw new AuthenticationException('Unauthenticated.');
    }
}
