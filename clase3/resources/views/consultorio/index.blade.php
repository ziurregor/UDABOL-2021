@extends('adminlte::page')

@section('title', 'Consultorios')

@section('content_header')
    <h1>Modulo Consultorios</h1>
@stop

@section('content')
<a href="consultorios/create" class="btn btn-primary">Registrar Nuevo</a>

<table class="table table-dark table-striped mt-4">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">CODIGO</th>
            <th scope="col">NOMBRE</th>

            <th scope="col">TELEFONO</th>
            <th scope="col">ACCIONES</th>

        </tr>
    </thead>
    <tbody>
    @foreach ($consultorios as $consultorio)
    <tr>
        <td>{{$consultorio->id}}</td>
        <td>{{$consultorio->codigo}}</td>
        <td>{{$consultorio->nombre}}</td>

        <td>{{$consultorio->telefono}}</td>
        <td>
        <form action="{{ route('consultorios.destroy',$consultorio->id) }}" method="POST">
          <a href="/consultorios/{{$consultorio->id}}/edit" class="btn btn-info">Editar</a>         
              @csrf
              @method('DELETE')
          <button type="submit" class="btn btn-danger">Delete</button>
         </form>         
        </td>        
    </tr>
        @endforeach
    </tbody>
</table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop