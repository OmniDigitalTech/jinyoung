<?php

namespace Modules\Management\Http\Controllers;

use App\Models\VisionMission;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class VisionMissionController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $storeLink  = route('management.vision-mission.store');

        $items = VisionMission::get();

        return view('management::vision_mission.index', compact('items', 'storeLink'));
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
        if ($request->language == 'all'){
            foreach (config('array.language') as $lang){
                $request->merge([
                    'language' => $lang
                ]);

                VisionMission::create($request->all());
            }
        }else{
            VisionMission::create($request->all());
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
    public function edit(VisionMission $vision)
    {
        $updateLink = route('management.vision-mission.update', $vision);

        return view('management::vision_mission.edit', compact('vision', 'updateLink'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(VisionMission $vision, Request $request)
    {
        $vision->update($request->all());

        return redirect()->route('management.vision-mission.index');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy(VisionMission $vision)
    {
        $vision->delete();

        return back();
    }
}
