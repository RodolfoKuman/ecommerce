<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Product;
use DB;

class MainController extends Controller
{
    public function home(){

      //$products = Product::latest()->paginate(8);
      $products = DB::table('products')->orderBy('title','asc')->paginate(8);

      return view('main.home', ["products" => $products]);
    }

    public function categories(){

      $productCategory = Product::where('category', 'infantil')->get();

      return view('categories.index', ["products" => $productCategory]);
    }

}
