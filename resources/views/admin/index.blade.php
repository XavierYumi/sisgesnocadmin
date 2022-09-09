@extends('adminlte::page')
@section('title', 'GestionInventario')

@section('content_header')
    <h1>ISTJ/Productos</h1>
@stop

@section('content')

{{$productos}}
    <p>Welcome to this beautiful admin panel.</p>
    <div class="position-relative">
    <table class="table">

<thead>

  <tr>

    <th scope="col">#</th>

    <th scope="col">Nombre</th>

    <th scope="col">precio</th>

  </tr>

</thead>

<tbody>

@foreach ($productos as $p)

<tr>

    <th scope="row">{{ $p->id }}</th>

    <td>{{ $p->nombre }}</td>

    <td>{{ $p->Precio }}</td>

  </tr>

  @endforeach



 

</tbody>

</table>s
  <div class="ribbon-wrapper ribbon-lg">
    <div class="ribbon bg-success text-lg">
      Ribbon
    </div>
  </div>
</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
