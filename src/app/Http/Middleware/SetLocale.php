<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $locale = $request->segment(1);

        if (in_array($locale, config('app.available_locales')) == false) {
            $locale = app()->getLocale();
            return redirect(route('welcome', $locale));
        }

        app()->setLocale($locale);
        URL::defaults(['locale' => $locale]);

        $request->setLocale($locale);
        $request->route()->forgetParameter('locale');

        return $next($request);
    }
}
