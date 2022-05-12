<?php

namespace App\Providers;

use App\Auth\Guard\IAMApiGuard;
use App\Auth\Guard\IAMWebGuard;
use App\Auth\IAMUserProvider;
use App\Http\Middleware\IAMApiAuthenticated;
use App\Http\Middleware\IAMApiCan;
use App\Http\Middleware\IAMAuthenticated;
use App\Http\Middleware\IAMCan;
use App\Service\System\UserIAMService;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class IAMGuardServiceProvider extends ServiceProvider
{
    /**
     * @SuppressWarnings("unused")
     */
    public function boot()
    {
        Auth::provider('iam-users', function ($app, array $config) {
            return new IAMUserProvider($config['model']);
        });

        Gate::define('iam-web', function ($user, $roles, $resource = '') {
            return $user->hasRole($roles, $resource) ?: null;
        });

        Gate::define('iam-api', function ($user, $roles, $resource = '') {
            return $user->hasRole($roles, $resource) ?: null;
        });
    }

    /**
     * @SuppressWarnings("unused")
     */
    public function register()
    {
        Auth::extend('iam-web', function ($app, $name, array $config) {
            $provider = Auth::createUserProvider($config['provider']);
            $keycloakService = new UserIAMService();
            return new IAMWebGuard($provider, $app->request, $keycloakService);
        });

        Auth::extend('iam-api', function ($app, $name, array $config) {
            $provider = Auth::createUserProvider($config['provider']);
            $iamService = new UserIAMService();
            return new IAMApiGuard($provider, $app->request, $iamService);
        });

        $this->app['router']->middlewareGroup('iam-web', [
            IAMAuthenticated::class
        ]);

        $this->app['router']->middlewareGroup('iam-api', [
            IAMApiAuthenticated::class,
            'throttle:60,1',
            SubstituteBindings::class,
        ]);

        $this->app['router']->aliasMiddleware('iam-web-can', IAMCan::class);
        $this->app['router']->aliasMiddleware('iam-api-can', IAMApiCan::class);
    }
}
