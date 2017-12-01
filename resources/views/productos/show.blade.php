@extends('layouts.app')
@section('header')
    <div class="page-header">
        <h1>Producto / Show #{{$producto->id}}</h1>
    </div>
@endsection

@section('content')
    <div class="well well-sm">
        <div class="row">
            <div class="col-md-6">
                <a class="btn btn-link" href="{{ route('productos.index') }}"><i class="glyphicon glyphicon-backward"></i> Back</a>
            </div>
            <div class="col-md-6">
                 <a class="btn btn-sm btn-warning pull-right" href="{{ route('productos.edit', $producto->id) }}">
                    <i class="glyphicon glyphicon-edit"></i> Edit
                </a>
            </div>
        </div>
    </div>

    <div class="row">

        <div class="col-md-12">

            <label>Codigo</label>
<p>
	{{ $producto->codigo }}
</p> <label>Nombreproducto</label>
<p>
	{{ $producto->nombreproducto }}
</p> <label>Descripcion</label>
<p>
	{{ $producto->descripcion }}
</p> <label>Imagen</label>
<p>
	{{ $producto->imagen }}
</p> <label>Categoria</label>
<p>
	{{ $producto->categoria }}
</p> <label>Stock</label>
<p>
	{{ $producto->stock }}
</p> <label>Precio</label>
<p>
	{{ $producto->precio }}
</p> <label>Visible</label>
<p>
	{{ $producto->visible }}
</p> <label>Top</label>
<p>
	{{ $producto->top }}
</p>

        </div>

    </div>
@endsection
