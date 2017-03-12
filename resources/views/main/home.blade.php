@extends('layouts.app')

@section('title','Productos tienda')


@section('content')

  <!-- Carousel de ofertas  -->
  <div class="container-fluid slider-home margin-top-short">
    <div class="row">
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
            <img src="img/banner3.jpg" alt="...">
            <div class="carousel-caption">

            </div>
          </div>
          <div class="item">
            <img src="/img/banner2.jpg" alt="...">
            <div class="carousel-caption">
                <h1>La mejor variedad de libros</h1>
            </div>
          </div>
          <div class="item">
            <img src="/img/banner1.jpg" alt="...">
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
  </div>

<!-- seccion de productos -->
<div class="container font-raleway">
    <div id="header-home" class="card">
      <h2>Libros más populares</h2>

      <div class="border-separator">a</div>

    <div class=" text-center products-container font-raleway">
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

<div class="container font-raleway">

    <div class=" col-md-7">

      <div class="recomended">
        <div class="">
          <h3>Lo más nuevo</h3>
        </div>
        <div class="col-md-4">
          <img src="/img/nuevo1.jpg" alt="">
        </div>
        <div class="col-md-4">
          <img src="/img/nuevo2.jpg" alt="">
        </div>
        <div class="col-md-4">
          <img src="/img/nuevo3.jpg" alt="">
        </div>
      </div>

    </div>
<!-- eventos -->
  <div class=" col-md-4 col-md-offset-1 next-event">
  <div class="panel panel-default">

    <img src="img/libros-frases.gif" alt="">
    
  </div>

    </div>
</div>

  @endsection
