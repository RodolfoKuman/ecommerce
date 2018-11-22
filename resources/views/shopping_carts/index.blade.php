@extends("layouts.app")
@section("content")

  <div class="big-padding text-center blue-grey white-text">
    <h1>Tu carrito de compras</h1>
  </div>
  <div class="container">
    <table class="table table-bordered">
      <thead>
        <tr>
          <td><h4>Producto</h4></td>
          <td class="text-center"><h4>Cantidad</h4></td>
          <td class="text-center"><h4>Precio</h4></td>
        </tr>
      </thead>
      <tbody>
        @foreach($products as $product)
          <tr>
            <td>
              <img src="{{ url("/products/images/$product->id.$product->extension")}}" alt="">
              <div class="inline-block margin-left">
                <h4 class="text-blue">{{$product->title}}</h4>
                <a href="#"><i class="fa fa-trash"></i> Eliminar</a>
              </div>
            </td>
            <td class="text-center" style="vertical-align:middle">1</td>
            <td class="text-center" style="vertical-align:middle" >${{$product->pricing}}</td>
          </tr>
        @endforeach
        <tr class="t-footer">
          <td></td>
          <td class="text-right">Total:</td>
          <td id="total" class="text-blue text-center">${{$total}}</td>
        </tr>
      </tbody>
    </table>
    <div class="text-right">
      @include("shopping_carts.form")
    </div>
  </div>

@endsection

<style media="screen">
  img{
    width: 100px;
    height: 130px;
  }
  .inline-block{
    display: block;
  }

  .text-blue{
    color: #226CF3;
  }

  .margin-left{
    margin-left: 20px;
  }

  .t-footer{
    font-size: 1.4em;
  }

  td {
    border-left: 0px solid !important;
    border-right: 0px solid !important;
  }


</style>
