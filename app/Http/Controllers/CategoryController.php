<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;


class CategoryController extends Controller
{
    function __construct(){
        $this->middleware('auth');
    }


    function show(){

        $categories = Category::all();
        return view('category/list', ['categories'=>$categories]);
    }

    // function form($id=null){
    //     $brand = new Brand();
    //     if($id!=null){
    //         $brand = Brand::findOrFail($id);
    //     }
    //     return view('brand/form', ['brand'=>$brand]);

    // }

    // function delete($id){
    //     $brand = Brand::findOrFail($id);
    //     $brand->delete();

    //     return redirect('/brands')->with('message', 'Marca Eliminada');

    // }

    // function save(Request $request){

    //     $request->validate(
    //         [
    //             "name"=>'required|max:50',
    //         ]
    //         );
        
    //     $brand = new Brand();
    //     if($request->id>0){
    //         $brand = Brand::findOrFail($request->id);
    //     }
    //     $brand->name = $request->name; 

    //     $brand->save();

    //     return redirect('/brands')->with('message', 'Marca guardada');
    // }
}
