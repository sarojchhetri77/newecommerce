<?php

namespace App\Http\Controllers;

use App\Http\Requests\filestore;
use App\Models\file;
use Illuminate\Http\Request;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index( Request $request)
    {    
        $id = $request->input('id');
        $images = file::where('store_id',$id)->get();
        return view('backend.file.main',compact('id','images'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {    
        $id = $request->input('id');
        return view('backend.file.create',compact('id'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(filestore $request)
    {   
        $id = $request->input('id');
        $validated = $request->validated();
        if ($request->hasFile('images')) {
            $photo_name =  time() . '.' . $request->file('images')->extension();
            $request->file('images')->move(public_path('uploads/'), $photo_name);

            file::create([
                'store_id' => $id,
                'name' => $photo_name,
            ]);
            return redirect()->route('file.index',["id"=> $id]);
    }
}

    /**
     * Display the specified resource.
     */
    public function show(file $file)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(file $file)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, file $file)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(file $image,$store)
    {
        //
    }
}
