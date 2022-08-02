<?php

namespace App\Http\Controllers\System\Admin;

use App\Enum\UserGroupTypeEnum;
use App\Http\Controllers\Controller;
use App\Model\System\Material;
use App\Model\System\Pedido;
use App\Service\System\MaterialService;
use App\Service\System\PedidoService;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class PedidoController extends Controller
{
    protected PedidoService $pedidoService;
    protected MaterialService $materialService;

    public function __construct(PedidoService $pedidoService, MaterialService $materialService)
    {
        $this->pedidoService = $pedidoService;
        $this->materialService = $materialService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return View|RedirectResponse
     */
    public function index(): View|RedirectResponse
    {
        if (Auth::user()->group == UserGroupTypeEnum::ADMIN) {
            $message = $this->pedidoService->all();
            if ($message->isError()) {
                session()->flash('response', $message->getFlash());
                return back()->withErrors($message->getErrors());
            }
        }
        if (Auth::user()->group == UserGroupTypeEnum::CLIENT) {
            $message = $this->pedidoService->findBy(['user_id' => Auth::user()->id]);
            if ($message->isError()) {
                session()->flash('response', $message->getFlash());
                return back()->withErrors($message->getErrors());
            }
        }

        return view('system.pedido.index', ['pedidos' => $message->getData()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return RedirectResponse|View
     */
    public function create(): RedirectResponse|View
    {
        $message = $this->materialService->all(['id', 'name']);
        if ($message->isError()) {
            session()->flash('response', $message->getFlash());
            return back()->withErrors($message->getErrors());
        }
        /** @var Material $materiais */
        $materiais = $message->getData();

        return view('system.pedido.new', ['materiais' => $materiais]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        $data = $request->all();
        $data['client_id'] = Auth::user()->id;
        $message = $this->pedidoService->create($data);
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
        /** @var Pedido $pedido */
        $pedido = $message->getData();
        $pedido->data = Carbon::parse($pedido->delivery_date)->format('d/m/Y');

        $messageMaterial = $this->materialService->all(['id', 'name']);
        if ($messageMaterial->isError()) {
            session()->flash('response', $messageMaterial->getFlash());
            return back()->withErrors($messageMaterial->getErrors());
        }
        /** @var Material $material */
        $material = $messageMaterial->getData();

        return view('system.pedido.edit', ['pedido' => $pedido, 'materiais' => $material]);
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
     * @return RedirectResponse
     */
    public function destroy($id): RedirectResponse
    {
        $message = $this->pedidoService->delete($id);
        session()->flash('response', $message->getFlash());
        if ($message->isError()) {
            return back()->withErrors($message->getErrors());
        }

        return redirect()->route('pedido.index');
    }
}
