<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact',function(){
     return view('about');
});
Route::get('/homepage',function(){
    return view('homepage');
});
Route::get("/Product" ,function(){
    return view ("product.product");
});
Route::get("product",[\App\Http\Controllers\ProductController::class,'index']);
Route::get("product/create",[\App\Http\Controllers\ProductController::class,'create']);
