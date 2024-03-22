<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\child_category;
use Illuminate\Http\Request;

class ChildCategoryController extends Controller
{
    public function index(Request $request){
        $id = $request->input('id');
        $pcategories = category::all();
        $categories = child_category::where('store_id',$id)->get();
        return view('backend.child_category.index',compact('categories','id','pcategories'));
    }

    public function store(Request $request){
        
        $request->validate([
       'title' => 'required|string',
       'category_id' => 'required',
        ]);
        $id = $request->input('id');
        print_r($id);
        child_category::create([
            'title' => $request->title,
            'category_id' => $request->category_id,
            'store_id' => $id, 
        ]);
        return redirect()->route('store.category.index',["id"=> $id]);

    }


    public function destroy(Request $request, $id){
    
        $category = child_category::findorFail($id);
        $id = $request->input('id');
        $category->delete();
        return redirect()->route('store.category.index',["id" => $id]);
    }


}
