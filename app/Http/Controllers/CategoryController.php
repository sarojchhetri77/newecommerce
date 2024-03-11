<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
       $categories = category::all();
       return view('backend.category.index',compact('categories'));
    }
    public function store(Request $request){
        $validated = $request->validate([
             'title'=>'string|required',
        ]);
         category::create([
            'title' => $request->title,
         ]);
         return redirect()->route('category.index');
    }
}
