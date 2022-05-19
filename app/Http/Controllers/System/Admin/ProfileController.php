<?php

namespace App\Http\Controllers\System\Admin;

use App\Http\Controllers\Controller;
use App\Service\System\UserService;
use App\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    private UserService $service;

    public function __construct(UserService $service)
    {
        $this->service = $service;
    }

    public function editInformation()
    {
        $user = auth()->user();
        return view('system.profile.information', ['user' => $user]);
    }

    public function updateInformation(Request $request)
    {
        $message = $this->service->profileUpdateInformation($request->all());

        session()->flash('response', $message->getFlash());

        if ($message->isError()) {
            return back()
                ->withInput($request->all())
                ->withErrors($message->getErrors());
        }

        return redirect(route('system.profile.information.edit'));
    }

    public function editPassword()
    {
        $user = auth()->user();
        return view('system.profile.password', ['user' => $user]);
    }

    public function updatePassword(Request $request)
    {
        $message = $this->service->profileUpdatePassword($request->all());

        session()->flash('response', $message->getFlash());

        if ($message->isError()) {
            return back()
                ->withInput($request->all())
                ->withErrors($message->getErrors());
        }

        return redirect(route('system.profile.password.edit'));
    }
}
