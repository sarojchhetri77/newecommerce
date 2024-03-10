<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductStore;
use App\Models\file;
use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $id = $request->input('id');
        $products = product::with('store','image')->where('store_id',$id)->get();
        return view('backend.products.main',compact('products','id'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {   
        $id = $request->input('id');
        $all_images = file::where("store_id",$id)->get();
        return view('backend.products.create',compact('id','all_images'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductStore $request)
    {
        $validated = $request->validated();
        $slug = generate_slug($validated['name']);
        $id = $request->input('id');
        $product = Product::create([
            'name' => $validated['name'],
            'price' => $validated['price'],
            'stoke' => $validated['stock'],
            'description' => $validated['description'],
            'image_id' => $validated['image_id'],
            'store_id' => $id,
            'slug' => $slug,
        ]);
        return redirect()->route('product.index',["id"=>$id]);

    }

    /**
     * Display the specified resource.
     */
    public function show(product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(product $product)
    {
        //
    }
}
