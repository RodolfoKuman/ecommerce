@extends('layouts.app')

@section('title','Productos tienda')


@section('content')

<!-- seccion de productos -->
  <div class="container margin-top">
    <h2>Categorias</h2>
    <hr>
  </div>
  <div class="container text-center products-container">
    <h3 class="text-left">Infantiles</h3>
    @foreach($products as  $product)
      <div class="col-xs-12 col-sm-6 col-md-4">
        @include('products.product',["products" => $product])
      </div>
    @endforeach

  </div>
@endsection
