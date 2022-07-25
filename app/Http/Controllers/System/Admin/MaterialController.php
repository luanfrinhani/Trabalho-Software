<?php

namespace App\Http\Controllers\System\Admin;

use App\Http\Controllers\Controller;
use App\Model\System\Material;
use App\Service\System\MaterialService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class MaterialController extends Controller
{
    protected MaterialService $materialService;

    public function __construct(MaterialService $materialService)
    {
        $this->materialService = $materialService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return RedirectResponse|View
     */
    public function index(): View|RedirectResponse
    {
        $message = $this->materialService->all();
        if ($message->isError()) {
            return back()->withErrors($message->getErrors());
        }

        return view('system.material.index', ['materiais' => $message->getData()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        return view('system.material.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return View|RedirectResponse
     */
    public function store(Request $request): View|RedirectResponse
    {
        $message = $this->materialService->create($request->all());
        session()->flash('response', $message->getFlash());
        if ($message->isError()) {
            return back()->withErrors($message->getErrors())->withInput($request->all());
        }

        return redirect()->route('material.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $id
     * @return View|RedirectResponse
     */
    public function show(string $id): View|RedirectResponse
    {
        $message = $this->materialService->find($id);
        if ($message->isError()) {
            session()->flash('response', $message->getFlash());
            return back()->withErrors($message->getErrors());
        }
        /** @var Material $material */
        $material = $message->getData();

        return view('system.material.show', ['material' => $material]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string  $id
     * @return View|RedirectResponse
     */
    public function edit(string $id): View|RedirectResponse
    {
        $message = $this->materialService->find($id);
        if ($message->isError()) {
            session()->flash('response', $message->getFlash());
            return back()->withErrors($message->getErrors());
        }
        /** @var Material $material */
        $material = $message->getData();

        return view('system.material.edit', ['material' => $material]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  string  $id
     * @return View|RedirectResponse
     */
    public function update(Request $request, string $id): View|RedirectResponse
    {
        $message = $this->materialService->update($request->all(), $id);
        session()->flash('response', $message->getFlash());
        if ($message->isError()) {
            return back()->withErrors($message->getErrors())->withInput($request->all());
        }

        return redirect()->route('material.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  string  $id
     * @return RedirectResponse|View
     */
    public function destroy(string $id): View|RedirectResponse
    {
        $message = $this->materialService->delete($id);
        session()->flash('response', $message->getFlash());
        if ($message->isError()) {
            return back()->withErrors($message->getErrors());
        }

        return redirect()->route('material.index');
    }

    public function materialPriceAjax(string $materialId, int $amount): JsonResponse
    {
        $totalPrice = $this->materialService->getPrice($materialId, $amount);

        return response()->json($totalPrice);
    }
}
