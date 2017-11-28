@extends('master')

@section('contenido')

        Productos

@endsection            


@section('datos')
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Descripción</th>
        
      </tr>
    </thead>
    <tbody>
                  
    @foreach( $productos as $prod)
                    
      <tr>
        <td>{{  $prod->nombreproducto }}</td>
        <td>{{  $prod->descripcion   }}</td>
        
      </tr>                    
    @endforeach

    </tbody>
  </table>
  
@endsection 