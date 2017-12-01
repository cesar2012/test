@extends('layouts.app')

@section('header')
    <div class="page-header">
        <h1><i class="glyphicon glyphicon-plus"></i> Producto / Create </h1>
    </div>
@endsection

@section('content')
    @include('error')

    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('productos.store') }}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group">
	<label for="codigo-field">Codigo</label>
	<input class="form-control" type="text" name="codigo" id="codigo-field" value="" />
</div> <div class="form-group">
	<label for="nombreproducto-field">Nombreproducto</label>
	<input class="form-control" type="text" name="nombreproducto" id="nombreproducto-field" value="" />
</div> <div class="form-group">
	<label for="descripcion-field">Descripcion</label>
	<input class="form-control" type="text" name="descripcion" id="descripcion-field" value="" />
</div> <div class="form-group">
	<label for="imagen-field">Imagen</label>
	<input class="form-control" type="text" name="imagen" id="imagen-field" value="" />
</div> <div class="form-group">
	<label for="categoria-field">Categoria</label>
	<input class="form-control" type="text" name="categoria" id="categoria-field" value="" />
</div> <div class="form-group">
	<label for="stock-field">Stock</label>
	<input class="form-control" type="text" name="stock" id="stock-field" value="" />
</div> <div class="form-group">
	<label for="precio-field">Precio</label>
	<input class="form-control" type="text" name="precio" id="precio-field" value="" />
</div> <div class="form-group">
	<label for="visible-field">Visible</label>
	<input class="form-control" type="text" name="visible" id="visible-field" value="" />
</div> <div class="form-group">
	<label for="top-field">Top</label>
	<input class="form-control" type="text" name="top" id="top-field" value="" />
</div>

                <div class="well well-sm">
                    <button type="submit" class="btn btn-primary">Create</button>
                    <a class="btn btn-link pull-right" href="{{ route('productos.index') }}"><i class="glyphicon glyphicon-backward"></i> Back</a>
                </div>
            </form>

        </div>
    </div>
@endsection