@extends('layouts.app');

@section("content")
<br>
<br>

  <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-5  col-md-offset-1 text-center">
        @if($product->extension)

          <img width="250" src="{{ url("/products/images/$product->id.$product->extension")}}"  alt="">
        @endif
        <h3 class="text-center title-book">{{$product->title}}</h3>
        <p class="precio-libro">{{$product->pricing}}</p>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-5">
        <h4>{{$product->description}}</h4>
      </div>


  </div>

@endsection
