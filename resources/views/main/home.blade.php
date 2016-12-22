@extends('layouts.app')

@section('title','Productos tienda')

@section('content')
  <div class="container text-center products-container">
    @foreach($products as  $product)
      <div class="col-xs-10 col-sm-6">
        @include('products.product',["products" => $product]);
      </div>
    @endforeach
    <div class="">
      {{$products->render()}}
    </div>
  </div>
@endsection
