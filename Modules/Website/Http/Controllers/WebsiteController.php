<?php

namespace Modules\Website\Http\Controllers;

use App\Models\History;
use App\Models\Product;
use App\Models\ProductProcess;
use App\Models\Question;
use App\Models\Setting;
use App\Models\Slider;
use App\Models\VisionMission;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class WebsiteController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $sliders = Slider::latest()->get();
        $histories = History::get()->sortBy('year');

        $visionmission = VisionMission::latest()->first();
        $processes = ProductProcess::get()->sortBy('step');

        $bestproducts = Product::where('is_best', 1)->latest()->get();
        $products = Product::where('is_best', 0)->latest()->get();

        $address = Setting::where('name', 'ADDRESS')->first();
        $email = Setting::where('name', 'EMAIL')->first();
        $phone = Setting::where('name', 'PHONE')->first();

        return view('website::index', compact('products', 'bestproducts', 'address', 'email', 'phone', 'visionmission', 'sliders', 'histories', 'processes'));
    }
    public function login()
    {
        return view('website::login');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('website::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('website::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('website::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }

    public function ask(Request $request){
        $request->merge([
            'product' => json_encode($request->products)
        ]);

        Question::create($request->all());

        return back();
    }
}
