@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
<div class="col-sm-12">
        <center><h1 style="text-align: center;padding: 15px;color: green;">LISTA DE PACIENTES</h1></center>
    <div>
        <a style="margin: 19px;" href="{{ route('paciente.create')}}" class="btn btn-outline-success">New nuevo</a>
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
          <td colspan = 2>Actions</td>
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
                <a href="{{ route('paciente.edit',$contact->id_p)}}" class="btn btn-success">M</a>
            </td>
            <td>
                <form action="{{ route('paciente.destroy', $contact->id_p)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">X</button>
                </form>
            </td>
            </div>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
</div>
@endsection
