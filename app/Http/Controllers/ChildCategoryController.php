<?php

namespace App\Http\Controllers;

use App\Models\child_category;
use Illuminate\Http\Request;

class ChildCategoryController extends Controller
{
    public function index(Request $request){
        $id = $request->input('id');
        $categories = child_category::all();
        return view('backend.child_category.index',compact('categories','id'));
    }
}
