<?php

namespace Modules\Management\Http\Controllers;

use App\Models\ProductProcess;
use App\Models\Setting;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ProductProcessController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $storeLink = route('management.product-process.store');
        $setting = Setting::where('name', 'PRODUCT PROCESS')->first();

        $processes = ProductProcess::get();

        return view('management::product_process.index', compact('storeLink', 'processes', 'setting'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('management::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        $process = ProductProcess::create($request->all());

        if ($request->picture){
            insert_picture($request->picture, $process);
        }

        return back();
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('management::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit(ProductProcess $process)
    {
        $updateLink = route('management.product-process.update', $process);

        return view('management::product_process.edit', compact('process', 'updateLink'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(ProductProcess $process, Request $request)
    {
        $process->update($request->all());

        if ($request->picture){
            insert_picture($request->picture, $process);
        }

        return redirect()->route('management.product-process.index');
    }

    public function updateSetting(Request $request){
        $setting = Setting::where('name', 'PRODUCT PROCESS')->first();
        $setting->update([
            'value' => json_encode($request->display)
        ]);

        return back();
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy(ProductProcess $process)
    {
        $process->delete();

        return back();
    }
}
