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