@extends('layouts.plantillabase');

@section('contenido')
<h2>REGISTRAR NUEVO CONSULTORIO</h2>

<form action="/consultorios" method="POST">
@csrf
  <div class="mb-3">
    <label for="" class="form-label">Asignar Código</label>
    <input id="codigo" name="codigo" type="text" class="form-control" tabindex="1">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Asignar Nombre/Especialidad</label>
    <input id="nombre" name="nombre" type="text" class="form-control" tabindex="2">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Asignar Telefono</label>
    <input id="telefono" name="telefono" type="number" class="form-control" tabindex="3">
  </div>
  <a href="/consultorios" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>
@endsection