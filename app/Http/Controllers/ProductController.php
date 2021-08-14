<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    function show(){

        $products = Product::all();
        return view('product/list', ['products'=>$products]);
    }

    function form(){
        return view('product/form');
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
        $product->name = $request->name;
        $product->cost = $request->cost;
        $product->price = $request->price;
        $product->brand = $request->brand;
        $product->quantity = $request->quantity; 

        $product->save();

        return redirect('/products');

    }

    function delete($id){

        $product = Product::findOrFail($id);
        $product->delete();

        //Product::destroy([id1, id2])

        return redirect('/products');
    }
}
