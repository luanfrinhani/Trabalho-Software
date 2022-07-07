<?php

namespace App\Http\Controllers\System\Admin;

use App\Http\Controllers\Controller;
use App\Service\System\PedidoService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PedidoController extends Controller
{
    protected PedidoService $pedidoService;

    public function __construct(PedidoService $pedidoService)
    {
        $this->pedidoService = $pedidoService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return View|RedirectResponse
     */
    public function index(): View|RedirectResponse
    {
        $message = $this->pedidoService->all();
        if ($message->isError()) {
            session()->flash('response', $message->getFlash());
            return back()->withErrors($message->getErrors());
        }

        return view('system.pedido.index', ['pedidos' => $message->getData()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        return view('system.pedido.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        $message = $this->pedidoService->create($request->all());
        session()->flash('response', $message->getFlash());
        if ($message->isError()) {
            return back()->withErrors($message->getErrors())->withInput($request->all());
        }

        return redirect()->route('pedido.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $id
     * @return View|RedirectResponse
     */
    public function show(string $id): View|RedirectResponse
    {
        $message = $this->pedidoService->find($id);
        if ($message->isError()) {
            session()->flash('response', $message->getFlash());
            return back()->withErrors($message->getErrors());
        }

        return view('system.pedido.show', ['pedido' => $message->getData()]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string  $id
     * @return RedirectResponse|View
     */
    public function edit(string $id): View|RedirectResponse
    {
        $message = $this->pedidoService->find($id);
        if ($message->isError()) {
            session()->flash('response', $message->getFlash());
            return back()->withErrors($message->getErrors());
        }

        return view('system.pedido.edit', ['pedido' => $message->getData()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id): RedirectResponse
    {
        $message = $this->pedidoService->update($request->all(), $id);
        session()->flash('response', $message->getFlash());
        if ($message->isError()) {
            return back()->withErrors($message->getErrors())->withInput($request->all());
        }

        return redirect()->route('pedido.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
