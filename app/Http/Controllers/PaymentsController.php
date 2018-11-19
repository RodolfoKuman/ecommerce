<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\ShoppingCart;
use App\PayPal;
use App\Order;

class PaymentsController extends Controller
{

  public function __construct(){
    $this->middleware("shoppingcart");
  }


    public function store(Request $request){


      try{
        $shopping_cart = $request->shopping_cart;

        $paypal = new PayPal($shopping_cart);
        $response = $paypal->execute($request->paymentId, $request->PayerID);

        if($response->state == "approved"){
          \Session::remove("shopping_cart_id");
          $order = Order::createFromPayPalResponse($response,$shopping_cart);
          $shopping_cart->approve();
        }

        return view("shopping_carts.completed",["shopping_cart" => $shopping_cart, "order" => $order]);

      }catch(\Exception $ex){
        dd($ex);
        exit(1);
      }

      //dd($order);
    }
}
