<div class=" product text-left">
  @if(Auth::check() && $product->user_id == Auth::user()->id )
    <div class="absolute actions">
      <a href="{{url('/products/'.$product->id.'/edit')}}" class="">Editar</a>
        @include('products.delete', [ 'product' => $product])
    </div>


  @endif

  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 text-center book-img-title">
      @if($product->extension)

        <img src="{{ url("/products/images/$product->id.$product->extension")}}" class="product-avatar" alt="">
      @endif
      <h4 class="text-center title-book">{{$product->title}}</h4>
    </div>
    <div class="img-info">
      <a href="{{ url("/products/$product->id/description") }}">Más informacion</a>
    </div>
  </div>
  <div class="col-xs-12 col-sm-12 col-md-12 text-center">

    <p class="precio-libro">{{$product->pricing}}</p>
    @include("in_shopping_carts.form", ["product" => $product])
  </div>
</div>
