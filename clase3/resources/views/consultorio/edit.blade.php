@extends('layouts.plantillabase')

@section('contenido')
<h2>EDITAR CONSULTORIO</h2>

<form action="/consultorios/{{$consultorio->id}}" method="POST">
    @csrf    
    @method('PUT')
  <div class="mb-3">
    <label for="" class="form-label">Modificar Codigo</label>
    <input id="codigo" name="codigo" type="text" class="form-control" value="{{$consultorio->codigo}}">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Modificar Nombre/Especialidad</label>
    <input id="nombre" name="nombre" type="text" class="form-control" value="{{$consultorio->nombre}}">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Modificar Telefono</label>
    <input id="telefono" name="telefono" type="number" class="form-control" value="{{$consultorio->telefono}}">
  </div>
  <a href="/consultorios" class="btn btn-secondary">Cancelar</a>
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>

@endsection