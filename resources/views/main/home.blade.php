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
          <img src="img/banner1.jpg" alt="...">
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
<div class="container">
    <div id="header-home" class="card">
      <h2>Libros más populares</h2>

      <div class="border-separator">a</div>

    <div class=" text-center products-container">
      @foreach($products as  $product)
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
          @include('products.product',["products" => $product])
        </div>
      @endforeach
      <div class="">
        {{$products->render()}}
      </div>
    </div>
  </div>
</div>

<div class="container">
    <div class=" col-md-7 recomended">
      <h3>Lo + leido</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
         Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
<!-- eventos -->
  <div class=" col-md-4 col-md-offset-1 next-event">
  <div class="panel panel-default">

    <img src="img/feria-libro.jpg" alt="">
    <div class="panel-body text-center">
    <a class="text-center" href="#">Más información</a>
    </div>
  </div>

    </div>
</div>

  @endsection
