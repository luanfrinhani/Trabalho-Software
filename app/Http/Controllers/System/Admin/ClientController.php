<?php

namespace App\Http\Controllers\System\Admin;

use App\Http\Controllers\Controller;
use App\Service\System\ClientService;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;

class ClientController extends Controller
{
    protected ClientService $clientService;

    public function __construct(ClientService $clientService)
    {
        $this->clientService = $clientService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response|View
     */
    public function index(): Response|View
    {
        $message = $this->clientService->all();

        if ($message->isError()) {
            session()->flash('response', $message->getFlash());
            return view('system.user.index', ['users' => []]);
        }

        $users = $message->getData();
        return view('system.client.index', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Factory|View
     */
    public function create(): Factory|View
    {
        return view('system.client.new');
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
        $message = $this->clientService->create($request->all());

        session()->flash('response', $message->getFlash());

        if ($message->isError()) {
            return back()
                ->withInput($request->all())
                ->withErrors($message->getErrors());
        }

        return redirect(route('system.client.edit', ['user' => $message->getData()]));
    }

    /**
     * Display the specified resource.
     *
     * @param string $id
     * @return RedirectResponse|Redirector
     * @SuppressWarnings("unused")
     */
    public function show(string $id): Redirector|RedirectResponse
    {
        return redirect(route('system.client.index'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param string $id
     * @return Factory|View
     */
    public function edit(string $id): Factory|View
    {
        $message = $this->clientService->find($id);

        if ($message->isError()) {
            abort(401);
        }

        return view('system.client.edit', ['user' => $message->getData()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param string $id
     * @return RedirectResponse
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $request->filled('active') ?: $request['active'] = 0;
        $message = $this->clientService->update($request->all(), $id);

        session()->flash('response', $message->getFlash());

        if ($message->isError()) {
            return back()
                ->withInput($request->all())
                ->withErrors($message->getErrors());
        }

        return redirect(route('system.client.edit', ['user' => $id]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param string $id
     * @return RedirectResponse|Redirector
     */
    public function destroy(string $id): Redirector|RedirectResponse
    {
        $message = $this->clientService->delete($id);

        session()->flash('response', $message->getFlash());
        if ($message->isError()) {
            return back()
                ->withErrors($message->getErrors());
        }
        return redirect(route('system.client.index'));
    }
}
