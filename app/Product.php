<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

  public function scopeLatest($query){
    return $query->orderBy("id","desc");
  }

    public function paypalItem(){
      return \PaypalPayment::item()->setName($this->title)
                                  ->setDescription($this->description)
                                  ->setCurrency('MXN')
                                  ->setQuantity(1)
                                  ->setPrice($this->pricing);
    }
}
