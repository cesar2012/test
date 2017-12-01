@extends('layouts.app')

@section('header')
    <div class="page-header clearfix">
        <h1>
            Producto
            <a class="btn btn-success pull-right" href="{{ route('productos.create') }}"><i class="glyphicon glyphicon-plus"></i> Create</a>
        </h1>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            @if($productos->count())
                <table class="table table-condensed table-striped">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th>Codigo</th> <th>Nombreproducto</th> <th>Descripcion</th> <th>Imagen</th> <th>Categoria</th> <th>Stock</th> <th>Precio</th> <th>Visible</th> <th>Top</th>
                            <th class="text-right">OPTIONS</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($productos as $producto)
                            <tr>
                                <td class="text-center"><strong>{{$producto->id}}</strong></td>

                                <td>{{$producto->codigo}}</td> <td>{{$producto->nombreproducto}}</td> <td>{{$producto->descripcion}}</td> <td>{{$producto->imagen}}</td> <td>{{$producto->categoria}}</td> <td>{{$producto->stock}}</td> <td>{{$producto->precio}}</td> <td>{{$producto->visible}}</td> <td>{{$producto->top}}</td>
                                
                                <td class="text-right">
                                    <a class="btn btn-xs btn-primary" href="{{ route('productos.show', $producto->id) }}">
                                        <i class="glyphicon glyphicon-eye-open"></i> View
                                    </a>
                                    
                                    <a class="btn btn-xs btn-warning" href="{{ route('productos.edit', $producto->id) }}">
                                        <i class="glyphicon glyphicon-edit"></i> Edit
                                    </a>

                                    <form action="{{ route('productos.destroy', $producto->id) }}" method="POST" style="display: inline;" onsubmit="return confirm('Delete? Are you sure?');">
                                        {{csrf_field()}}
                                        <input type="hidden" name="_method" value="DELETE">

                                        <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $productos->render() !!}
            @else
                <h3 class="text-center alert alert-info">Empty!</h3>
            @endif

        </div>
    </div>

@endsection