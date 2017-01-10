<div class="card product text-left">
  @if(Auth::check() && $product->user_id == Auth::user()->id )
    <div class="absolute actions">
      <a href="{{url('/products/'.$product->id.'/edit')}}" class="">Editar</a>
        @include('products.delete', [ 'product' => $product])
    </div>


  @endif
  <h4>{{$product->title}}</h4>
  <div class="row">
    <div class="col-xs-12 col-sm-4 ">
      @if($product->extension)
        <img src="{{ url("/products/images/$product->id.$product->extension")}}" class="product-avatar" alt="">
      @endif
    </div>
    <div id="product-description" class="col-xs-12 col-sm-8 ">
      <p><strong>Descripción</strong></p>
      <p>{{$product->description}}</p>
    </div>
  </div>
  <div class="col-xs-12 col-sm-12 col-md-12 text-center">
    <p class="precio-libro">{{$product->pricing}}</p>
    @include("in_shopping_carts.form", ["product" => $product])
  </div>
</div>
