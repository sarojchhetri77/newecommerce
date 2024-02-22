<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoresStore;
use App\Mail\StoreApproveRequest;
use App\Models\store;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     */
    public function approveStore(Store $store)
{
    // Update the store status to 'approved'
    $store->update(['status' => 'approved']);

    // Optionally, send a confirmation email to the store owner
    // ...

    return redirect()->route('home')->with('success', 'Store approved successfully.');
}
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.store.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoresStore $request)
    {   
        $validated = $request->validated();
       $store = store::create([
           'name'=> $validated['name'],
           'user_id'=> Auth::id(),
           'email'=>$validated['email'],
        ]);
        Mail::to('elsashrestha58@gmail.com')->send(new StoreApproveRequest($store));
        return redirect()->route('stores.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(store $store)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(store $store)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, store $store)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(store $store)
    {
        //
    }
}
