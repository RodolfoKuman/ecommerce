<?php

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
//REST
Route::get('/','MainController@home');

Route::get('/carrito','ShoppingCartsController@index');
Route::get('/payments/store','PaymentsController@store');

Auth::routes();

Route::resource('products','ProductsController');

Route::resource('in_shopping_carts','InShoppingCartsController',[
  'only' => ['store','destroy']
]);

Route::resource('compras','ShoppingCartsController',[
  'only' => ['show']
]);

Route::resource('orders','OrdersController',[
  'only' => ['index','update']
]);

Route::get('/home', 'HomeController@index');
