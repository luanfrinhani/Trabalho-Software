<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Support\Facades\Auth;

class IAMCan extends IAMAuthenticated
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
        if (empty($guards) && Auth::check()) {
            return $next($request);
        }

        $guards = explode('|', ($guards[0] ?? ''));

        if (Auth::hasRole($guards)) {
            return $next($request);
        }

        throw new AuthenticationException('Unauthenticated.', $guards, $this->redirectTo($request));
    }
}
