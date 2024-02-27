<?php

namespace Modules\Management\Http\Controllers;

use App\Models\Setting;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $updateLink = route('management.contact.update');

        $address = Setting::where('name', 'ADDRESS')->first();
        $email = Setting::where('name', 'EMAIL')->first();
        $phone = Setting::where('name', 'PHONE')->first();

        return view('management::contact.index', compact('updateLink', 'address', 'email', 'phone'));
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
        //
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
    public function edit($id)
    {
        return view('management::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request)
    {
        if ($request->address){
            $address = Setting::where('name', 'ADDRESS')->first();
            $address->update([
                'value' => json_encode($request->address)
            ]);
        }

        if ($request->email){
            $address = Setting::where('name', 'EMAIL')->first();
            $address->update([
                'value' => json_encode($request->email)
            ]);
        }

        if ($request->phone){
            $address = Setting::where('name', 'PHONE')->first();
            $address->update([
                'value' => json_encode($request->phone)
            ]);
        }

        return back();
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
}
