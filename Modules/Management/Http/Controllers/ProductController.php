<?php

namespace Modules\Management\Http\Controllers;

use App\Models\Product;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $storeLink = route('management.product.store');

        $products = Product::get();

        return view('management::product.index', compact('products', 'storeLink'));
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
        $product = Product::create($request->all());

        if ($request->picture){
            insert_picture($request->picture, $product, $request->name);
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
    public function edit(Product $product)
    {
        $updateLink = route('management.product.update', $product);

        return view('management::product.edit', compact('updateLink', 'product'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Product $product, Request $request)
    {
        if (empty($request->is_best)){
            $request->merge([
                'is_best' => 0,
            ]);
        }
        $product->update($request->all());

        if ($request->picture){
            insert_picture($request->picture, $product, $request->name);
        }

        return redirect()->route('management.product.index');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return back();
    }
}
