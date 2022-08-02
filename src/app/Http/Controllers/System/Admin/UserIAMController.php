<?php

namespace App\Http\Controllers\System\Admin;

use App\Http\Controllers\Controller;
use App\Service\System\UserIAMService;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;

class UserIAMController extends Controller
{
    protected $service;

    public function __construct()
    {
        $this->service = new UserIAMService();
    }

    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index()
    {
        $message = $this->service->all();

        if ($message->isError()) {
            session()->flash('response', $message->getFlash());
            return view('system.user_iam.index', ['users' => []]);
        }

        $users = $message->getData();
        return view('system.user_iam.index', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Factory|View
     */
    public function create()
    {
        return view('system.user_iam.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        $request->filled('active') ?: $request['active'] = 0;
        $message = $this->service->create($request->all());

        session()->flash('response', $message->getFlash());

        if ($message->isError()) {
            return back()
                ->withInput($request->all())
                ->withErrors($message->getErrors());
        }

        return redirect(route('system.user.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param mixed $id
     * @return RedirectResponse|Redirector
     * @SuppressWarnings("unused")
     */
    public function show($id)
    {
        return redirect(route('system.user.index'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param mixed $id
     * @return Factory|View
     */
    public function edit($id)
    {
        $message = $this->service->find($id);

        if ($message->isError()) {
            abort(401);
        }

        return view('system.user_iam.edit', ['user' => $message->getData()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param mixed $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id): RedirectResponse
    {
        $message = $this->service->update($request->all(), $id);

        session()->flash('response', $message->getFlash());

        if ($message->isError()) {
            return back()
                ->withInput($request->all())
                ->withErrors($message->getErrors());
        }

        return redirect(route('system.user.edit', ['user' => $id]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param mixed $id
     * @return RedirectResponse|Redirector
     */
    public function destroy($id)
    {
        $message = $this->service->delete($id);

        session()->flash('response', $message->getFlash());
        if ($message->isError()) {
            return back()
                ->withErrors($message->getErrors());
        }
        return redirect(route('system.user.index'));
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function searchByEmail(Request $request)
    {
        if ($request->ajax() == false) {
            abort(403);
        }

        if ($request->filled('search')  == false) {
            return response()->json(
                ['type' => 'danger', 'message' => trans('user.validation.email.required'), 'errors' => []]
            );
        }
        $email = $request->input('search');

        $message = $this->service->findBy(['search' => $email]);
        if ($message->isError()) {
            return response()->json(
                $message->getFlash()
            );
        }

        $user = $message->getData();

        return response()->json(
            ['type' => 'success', 'message' => $message->getMessage(), 'data' => $user]
        );
    }
}
