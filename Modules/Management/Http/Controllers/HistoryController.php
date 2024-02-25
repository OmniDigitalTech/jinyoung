<?php

namespace Modules\Management\Http\Controllers;

use App\Models\History;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class HistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $storeLink = route('management.history.store');

        $histories = History::get();

        return view('management::histories.index', compact('storeLink', 'histories'));
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
        History::create($request->all());

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
    public function edit(History $history)
    {
        $updateLink = route('management.history.update', $history);

        return view('management::histories.edit', compact('history', 'updateLink'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(History $history, Request $request)
    {
        $history->update($request->all());

        return redirect()->route('management.history.index');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy(History $history)
    {
        $history->delete();

        return back();
    }
}
