{!! Form::open(['url' => $url,'method' => $method , 'files' => true])!!}
    <div class="form-group">
      {{Form::text('title', $product->title,['class' => 'form-control','placeholder' =>'Titulo...','required' =>'true'])}}
    </div>
    <div class="form-group">
      {{Form::number('pricing', $product->pricing,['class' => 'form-control','placeholder' =>'$0.00...','required' =>'true', 'step' => '0.01' ])}}
    </div>
    <div class="form-group">
      {{ Form::file('cover') }}
    </div>
    <div class="form-group">
      {{Form::textarea('description', $product->description,['class' => 'form-control','placeholder' =>'Descripcion del producto...','required' =>'true'])}}
    </div>
    <div class="form-group text-right">
      <a href="{{url('/products')}}">Regresar al listado de productos</a>
    </div>
    <input type="submit" name="" value="Enviar" class="btn btn-success">
{!! Form::close()  !!}
