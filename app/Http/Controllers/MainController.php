<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Product;

class MainController extends Controller
{
    public function home(){

      $products = Product::latest()->paginate(6);

      return view('main.home', ["products" => $products]);
    }
}
