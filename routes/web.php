<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('backend.main');
});
 
Route::get('/contact',function(){
     return view('about');
});
Route::get('/contact',function(){
    return view('backend.main');
});
Route::get('/contact',function(){
    return view('backend.pages.');
});

Route::get('/homepage',function(){
    return view('homepage');
});
Route::get("/Product" ,function(){
    return view ("product.product");
});

Route::get("category/create",[\App\Http\Controllers\CategoryController::class,'create']);


Route::get("product",[\App\Http\Controllers\ProductController::class,'index']);
Route::get("product/create",[\App\Http\Controllers\ProductController::class,'create']);
 
