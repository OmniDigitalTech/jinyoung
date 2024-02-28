<?php

namespace Modules\Management\Http\Controllers;

use App\Models\Setting;
use App\Models\Slider;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $storeLink = route('management.slider.store');
        $setting = Setting::where('name', 'SLIDER')->first();

        $sliders = Slider::latest()->get();
        return view('management::slider.index', compact('sliders', 'storeLink', 'setting'));
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
        $slider = Slider::create($request->all());

        insert_picture($request->picture, $slider, $request->title);

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
    public function edit(Slider $slider)
    {
        $updateLink = route('management.slider.update', $slider);

        return view('management::slider.edit', compact('slider', 'updateLink'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Slider $slider, Request $request)
    {
        if ($request->picture){
            insert_picture($request->picture, $slider, $request->title);
        }
        $slider->update($request->all());

        return redirect()->route('management.slider.index');
    }

    public function updateSetting(Request $request){
        $setting = Setting::where('name', 'SLIDER')->first();
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
    public function destroy(Slider $slider)
    {
        $slider->delete();

        return back();
    }
}
