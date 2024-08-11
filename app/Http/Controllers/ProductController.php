<?php
namespace App\Http\Controllers;

class ProductController extends Controller
{
   public function index(){
    return view('product.product');
   }
   public function create(){
     return view('product.create');
   }
}
 


