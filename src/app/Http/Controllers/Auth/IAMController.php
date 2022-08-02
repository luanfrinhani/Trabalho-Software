<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Service\System\UserIAMService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class IAMController extends Controller
{
    private $iamkService;

    public function __construct()
    {
        $this->iamkService = new UserIAMService();
    }

    public function login()
    {
        $message = $this->iamkService->getLoginUrl();
        if ($message->isError()) {
            abort(404);
        }
        $url = $message->getData();

        $this->iamkService->saveState();

        return redirect($url);
    }

    public function logout()
    {
        $this->iamkService->forgetToken();

        $message = $this->iamkService->getLogoutUrl();
        if ($message->isError()) {
            abort(404);
        }
        $url = $message->getData();

        return redirect($url);
    }

    public function register()
    {
        $message = $this->iamkService->getRegisterUrl();
        if ($message->isError()) {
            abort(404);
        }
        $url = $message->getData();

        return redirect($url);
    }

    public function callback(Request $request)
    {
        $message = $this->iamkService->callback($request->all());

        if ($message->isError()) {
            abort(403, $message->getMessage());
        }

        $token = $message->getData();

        if (Auth::validate($token) == false) {
            return redirect(route('system.get.logout'));
        }

        $user = Auth::user();

        if ($user->locale) {
            $locale = Str::lower($user->locale);
            if (in_array($locale, config('app.available_locales'))) {
                app()->setLocale($locale);
            }
        }

        return redirect()->intended(route('home', ['locale' => app()->getLocale()]));
    }
}
