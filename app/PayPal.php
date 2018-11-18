<?php

namespace App;

class PayPal
{
    private $_apiContext;
    private $shopping_cart;
    private $_ClientId = "ARnrDmbz2sHhFgehylf7JJ9tCn5BKwX-9lSgCtLK1Uw68eRQvBfiJnK71n8qNqoBClX-eUeM2ha6k6P_";
    private $_ClientSecret = "EPQvf1nua8-YFtiueK5vf334ds0Bp1WLxop_Ylv2aTs8WBIGsURxKH3MNZJCxkCw2O27E-Te5K_0wDvr";

    public function __construct($shopping_cart){

      $this->_apiContext = \PaypalPayment::ApiContext($this->_ClientId, $this->_ClientSecret);

      $config = config("paypal_payment");
      $flatConfig = array_dot($config);

      $this->_apiContext->setConfig($flatConfig);

      $this->shopping_cart = $shopping_cart;

    }

    public function generate(){
      $payment = \PaypalPayment::payment()->setIntent("sale")
                              ->setPayer($this->payer())
                              ->setTransactions([$this->transaction()])
                              ->setRedirectUrls($this->redirectURLs());
                  try{
                    $payment->create($this->_apiContext);
                  }catch(\Exception $ex){
                    dd($ex);
                    exit(1);
                  }
                  return $payment;
    }

    public function payer(){
      return \PaypalPayment::payer()
                            ->setPaymentMethod("paypal");
    }

    public function transaction(){
      return \PaypalPayment::transaction()
                            ->setAmount($this->amount())
                            ->setItemList($this->items())
                            ->setDescription("Tu compra en productos kuman")
                            ->setInvoiceNumber(uniqid());
    }

    public function amount(){
      return \PaypalPayment::amount()->setCurrency("USD")
                           ->setTotal($this->shopping_cart->totalUSD());
    }

    public function items(){
      $items = [];

      $products = $this->shopping_cart->products()->get();

      foreach($products as $product){
        array_push($items, $product->paypalItem());
      }

      return \PaypalPayment::itemList()->setItems($items);
    }

    public function redirectUrls(){
      $baseURL = url('/');
      return \PaypalPayment::redirectURLs()
                      ->setReturnUrl("$baseURL/payments/store")
                      ->setCancelUrl("$baseURL/carrito");
    }

    public function execute($paymentId , $payerId){
      $payment = \PaypalPayment::getById($paymentId, $this->_apiContext);
      $execution = \PaypalPayment::PaymentExecution()->setPayerId($payerId);

      //$payment->execute($execution, $this->_apiContext);

      return $payment->execute($execution, $this->_apiContext);
    }
}
