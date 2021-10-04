@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row">
      <div class="col-sm-8 offset-sm-2">
        <center><h1 style="text-align: center;padding: 15px;color: green;">REGISTRAR PACIENTE</h1></center>
        <div>
            @if ($errors->any())
            |  <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div><br/>
            @endif
            <form method="post" action="{{ route('paciente.store') }}">
                @csrf
                <div class="row">
                  <div class="col">
                      <div class="form-group">
                          <label for="name">CI:</label>
                          <input onkeypress="return (event.charCode >= 48 && event.charCode <= 57)" type="text" maxlength="8" class="form-control" required name="ci_p"/>
                      </div>
                      <div class="form-group">
                          <label for="name">Nombre:</label>
                          <input onkeypress="return (event.charCode == 209 || event.charCode == 32 || event.charCode == 241 || (event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122))" type="text" maxlength="30" class="form-control" required name="nombre_p"/>
                      </div>
                      <div class="form-group">
                          <label for="name">Apellidos:</label>
                          <input onkeypress="return (event.charCode == 209 || event.charCode == 32 || event.charCode == 241 || (event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122))" type="text" maxlength="30" class="form-control" required name="apellidos_p"/>
                      </div>
                      <div class="form-group">
                          <label for="name">Edad:</label>
                          <input onkeypress="return (event.charCode >= 48 && event.charCode <= 57)" type="text" maxlength="2" class="form-control" required name="edad_p"/>
                      </div>
                      <div class="form-group">
                          <label for="name">Telefono:</label>
                          <input onkeypress="return (event.charCode >= 48 && event.charCode <= 57)" type="text" maxlength="8" class="form-control" required name="telefono_p"/>
                      </div>
                      <button type="submit" class="btn btn-primary btn-lg btn-block">Registrar</button>

                  </div>
                  <div class="col">
                    <div class="form-group">
                        <label for="name">Direccion:</label>
                        <input type="text" maxlength="30" class="form-control" required name="direccion_p"/>
                    </div>
                    <div class="form-group">
                          <label for="nivel_acceso">Departamento:</label>
                          <select class="form-control" id="nivel_acceso" name="departamento_p">
                              <option value="">Seleccione un departamento</option>
                              <option value="Beni">Beni</option>
                              <option value="Chuquisaca"> Chuquisaca</option>
                              <option value="Cochabamba">Cochabamba</option>
                              <option value="La Paz"> La Paz</option>
                              <option value="Oruro">Oruro</option>
                              <option value="Pando"> Pando</option>
                              <option value="Potosí">Potosí</option>
                              <option value="Santa Cruz"> Santa Cruz</option>
                              <option value="Tarija">Tarija</option>
                          </select>
                    </div>
                    <div class="form-group">
                          <label for="nivel_acceso">Sexo:</label>
                          <select class="form-control" id="nivel_acceso" name="sexo_p">
                              <option value="">Seleccione un sexo</option>
                              <option value="Masculino">Masculino</option>
                              <option value="Femenino"> Femenino</option>
                              <option value="otros">otros</option>
                          </select>
                    </div>
                    <div class="form-group">
                        <label for="name">Fecha de Nacimiento:</label>
                        <input type="date" class="form-control" required name="fechanac_p"/>
                    </div>
                    <div class="form-group">
                        <label for="name">correo:</label>
                        <input type="email" class="form-control" required name="correo_p"/>
                    </div>
                    <a href="{{route('paciente.index')}}" class="btn btn-secondary btn-lg btn-block">Cancelar</a>
                </div>
            </form>
        </div>
      </div>
  </div>
</div>
  @endsection
