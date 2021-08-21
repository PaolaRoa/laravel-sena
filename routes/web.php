<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\ProductController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/usuario', function(){
//     return "hola"; 
// });

//parametro opcional
Route::get('/usuario/{nombre_usuario?}', [PersonaController::class,'mostrar'])->where('nombre_usuario', '[A-Za-z]+');

Route::get('/products', [ProductController::class, 'show']);

Route::get('/product/form/{id?}', [ProductController::class, 'form'])->name('product.form');

Route::post('/product/save',[ProductController::class, 'save'])->name('product.save');

Route::get('/product/delete/{id}',[ProductController::class, 'delete'])->name('product.delete');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
