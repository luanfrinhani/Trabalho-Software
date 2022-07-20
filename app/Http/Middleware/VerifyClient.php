<?php

namespace App\Http\Middleware;

use App\Enum\UserGroupTypeEnum;
use App\Service\System\UserService;
use App\User;
use Closure;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class VerifyClient
{
    protected UserService $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    /**
     * Handle an incoming request.
     *
     * @param  Request  $request
     * @param  Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return Response|RedirectResponse
     * @throws AuthenticationException
     */
    public function handle(Request $request, Closure $next): Response|RedirectResponse
    {
        /** @var User $user */
        $user = Auth::user();
        if ($user->group == UserGroupTypeEnum::CLIENT || $user->group == UserGroupTypeEnum::ADMIN) {
            return $next($request);
        }

        throw new AuthenticationException('Unauthenticated.');
    }
}
