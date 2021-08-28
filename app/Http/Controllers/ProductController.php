<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Brand;

class ProductController extends Controller
{
    
    function __construct(){
        $this->middleware('auth');
    }

    function show(){

        $products = Product::all();
        return view('product/list', ['products'=>$products]);
    }

    function form($id=null){


        $product = new Product();
        $brands = Brand::all();
        if($id!=null){
            $product = Product::findOrFail($id);
        }

        return view('product/form',
         ['product'=> $product,
            'brands'=> $brands]);
    }

    function save(Request $request){
        
        //validación
        $request->validate([
            "name"=>'required|max:50',
            "cost"=>'required|numeric',
            "price"=>'required|numeric',
            "brand"=>'required|max:50',
            "quantity"=>'required|numeric',
        ]);

        $product = new product();
        if($request->id >0){
            $product = Product::findOrFail($request->id);
        }
        $product->name = $request->name;
        $product->cost = $request->cost;
        $product->price = $request->price;
        $product->brand_id = $request->brand;
        $product->quantity = $request->quantity; 

        $product->save();

        return redirect('/products')->with('message', 'Producto guardado');

    }

    function delete($id){

        $product = Product::findOrFail($id);
        $product->delete();

        //Product::destroy([id1, id2])

        return redirect('/products')->with('message', 'Producto Eliminado');
    }
}
