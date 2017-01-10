@extends('layouts.app')

@section('title','Productos tienda')


@section('content')

  <!-- Carousel de ofertas  -->
  <div class="container slider-home margin-top-short">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="/img/banner1.jpg" alt="...">
          <div class="carousel-caption">

          </div>
        </div>
        <div class="item">
          <img src="/img/banner2.jpg" alt="...">
          <div class="carousel-caption">

          </div>
        </div>
        <div class="item">
          <img src="/img/banner3.png" alt="...">
          <div class="carousel-caption">

          </div>
        </div>
      </div>

      <!-- Controls -->
      <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

  </div>

<!-- seccion de productos -->
  <div id="header-home" class="container">
    <h2>Libros más populares</h2>
    <hr>
  </div>
  <div class="container text-center products-container">
    @foreach($products as  $product)
      <div class="col-xs-12 col-sm-6 col-md-4">
        @include('products.product',["products" => $product])
      </div>
    @endforeach
    <div class="">
      {{$products->render()}}
    </div>
  </div>
@endsection
