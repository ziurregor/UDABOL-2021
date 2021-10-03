@extends('layouts.app')
@section('content')
 <!-- Scripts -->
 <script src="{{ asset('js/app.js') }}" defer></script>
 <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Fonts -->
<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href="/node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="/node_modules/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
<div class="container">
<div class="row">
<div class="col-sm-14">
        <center><h1 style="text-align: center;padding: 15px;color: green;">LISTA DE PACIENTES</h1></center>
    <div>
        <a style="margin: 19px;" href="{{ route('paciente.create')}}" class="btn btn-outline-success">Nuevo Registro</a>
    </div>
   <table class="table table-responsive table-hover table-fixed">
    <thead class="">
        <tr>
          <td>ID</td>
          <td>CI</td>
          <td>Nombre</td>
          <td>Apellidos</td>
          <td>Edad</td>
          <td>Telefono</td>
          <td>Direccion</td>
          <td>Departamento</td>
          <td>Sexo</td>
          <td>Fecha de Nacimiento</td>
          <td>Correo</td>
          <td colspan = 2>Operaciones</td>
        </tr>
    </thead>
    <tbody>
        @foreach($contacts as $contact)
        <tr>
            <td>{{$contact->id_p}}</td>
            <td>{{$contact->ci_p}}</td>
            <td>{{$contact->nombre_p}}</td>
            <td>{{$contact->apellidos_p}}</td>
            <td>{{$contact->edad_p}}</td>
            <td>{{$contact->telefono_p}}</td>
            <td>{{$contact->direccion_p}}</td>
            <td>{{$contact->departamento_p}}</td>
            <td>{{$contact->sexo_p}}</td>
            <td>{{$contact->fechanac_p}}</td>
            <td>{{$contact->correo_p}}</td>
            <div class="btn-group">
            <td>
            <a href="{{ route('paciente.edit',$contact->id_p)}}" class="btn btn-success">Editar</a>
            </td>
            <td>
                <form action="{{ route('paciente.destroy', $contact->id_p)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit"><i class="bi bi-pencil-square"></i>Eliminar</button>
                </form>
            </td>
            <i class="bi bi-bank2"></i>
            </div>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
</div>
@endsection
