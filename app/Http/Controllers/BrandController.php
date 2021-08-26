<?php

namespace App\Http\Controllers;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    function __construct(){
        $this->middleware('auth');
    }


    function show(){

        $brands = Brand::all();
        return view('brand/list', ['brands'=>$brands]);
    }
}
