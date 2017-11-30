@extends('layout')

@section('header')
    <div class="page-header">
        <h1><i class="glyphicon glyphicon-edit"></i> Producto / Edit #{{$producto->id}}</h1>
    </div>
@endsection

@section('content')
       						<ul>
                                @if ($errors->any())
                                    <span class="help-block">
                                    @foreach($errors->all() as $error)
                                     <li>   <strong>{{ $error }}</strong> </li>
                                    @endforeach    
                                    </span>
                                @endif
                            </ul>

    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('productos.update', $producto->id) }}" method="POST">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group">
				<label for="codigo-field">Codigo</label>
				<input class="form-control" type="text" name="codigo" id="codigo-field" value="{{ old('codigo', $producto->codigo ) }}" required/>


                                @if ($errors->has('codigo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('codigo') }}</strong>
                                    </span>
                                @endif
                </div> 

<div class="form-group">
	<label for="nombreproducto-field">Nombreproducto</label>
	<input class="form-control" type="text" name="nombreproducto" id="nombreproducto-field" value="{{ old('nombreproducto', $producto->nombreproducto ) }}" required/>

                                @if ($errors->has('nombreproducto'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nombreproducto') }}</strong>
                                    </span>
                                @endif




</div>



 <div class="form-group">
	<label for="descripcion-field">Descripcion</label>
	<input class="form-control" type="text" name="descripcion" id="descripcion-field" value="{{ old('descripcion', $producto->descripcion ) }}" required/>

                                @if ($errors->has('descripcion'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('descripcion') }}</strong>
                                    </span>
                                @endif


</div>




 <div class="form-group">
	<label for="imagen-field">Imagen</label>
	<input class="form-control" type="text" name="imagen" id="imagen-field" value="{{ old('imagen', $producto->imagen ) }}" />
</div> <div class="form-group">
	<label for="categoria-field">Categoria</label>
	<input class="form-control" type="text" name="categoria" id="categoria-field" value="{{ old('categoria', $producto->categoria ) }}" />
</div> <div class="form-group">
	<label for="stock-field">Stock</label>
	<input class="form-control" type="text" name="stock" id="stock-field" value="{{ old('stock', $producto->stock ) }}" />
</div> <div class="form-group">
	<label for="precio-field">Precio</label>
	<input class="form-control" type="text" name="precio" id="precio-field" value="{{ old('precio', $producto->precio ) }}" />
</div> <div class="form-group">
	<label for="visible-field">Visible</label>
	<input class="form-control" type="text" name="visible" id="visible-field" value="{{ old('visible', $producto->visible ) }}" />
</div> <div class="form-group">
	<label for="top-field">Top</label>
	<input class="form-control" type="text" name="top" id="top-field" value="{{ old('top', $producto->top ) }}" />
</div>

                <div class="well well-sm">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <a class="btn btn-link pull-right" href="{{ route('productos.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>
                </div>
            </form>

        </div>
    </div>
@endsection