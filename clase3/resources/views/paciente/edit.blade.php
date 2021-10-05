@extends('layouts.app')
@section('content')
<center>
<div class="container">
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <center><h1 style="text-align: center;padding: 15px;color: black; font-weight: bold;">ACTUALIZAR DATOS </h1></center>
            <div>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                <br/>
                @endif
                <form method="post" action="{{ route('paciente.update', $contact->id_p) }}">
                        @method('PATCH')
                        @csrf
                        <div class="row">
                                <div class="col"> 
                                    <div class="form-group">
                                        <label for="name">Nombre:</label>
                                        <input onkeypress="return (event.charCode == 209 || event.charCode == 32 || event.charCode == 241 || (event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122))"
                                    type="text" maxlength="30"  class="form-control" required name="nombre_p" value={{ $contact->nombre_p }} />
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Apellidos:</label>
                                        <input onkeypress="return (event.charCode == 209 || event.charCode == 32 || event.charCode == 241 || (event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122))"
                                    type="text" maxlength="30"  class="form-control" required name="apellidos_p" value={{ $contact->apellidos_p }} />
                                    </div>
                                    <div class="form-group">
                                        <label for="name">CI:</label>
                                        <input onkeypress="return (event.charCode >= 48 && event.charCode <= 57)" type="text" maxlength="8" class="form-control" required name="ci_p"value={{ $contact->ci_p }} />
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Edad:</label>
                                        <input onkeypress="return (event.charCode >= 48 && event.charCode <= 57)" type="text" maxlength="2" class="form-control" required name="edad_p" value={{ $contact->edad_p }} />
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Telefono:</label>
                                        <input onkeypress="return (event.charCode >= 48 && event.charCode <= 57)" type="text" maxlength="8" class="form-control" required name="telefono_p" value={{ $contact->telefono_p }} />
                                    </div>
                                    

                                    <a href="{{ route('paciente.index')}}" class="btn btn-secondary btn-lg badge-block">Cancelar</a>
                                </div>
                                <div class="col">
                                        <div class="form-group">
                                            <label for="name">Direccion:</label>
                                            <input type="text" class="form-control" required name="direccion_p" value={{ $contact->direccion_p }} />
                                        </div>
                                        <div class="form-group">
                                            <label for="nivel_acceso">Departamento:</label>
                                            <select class="form-control" id="nivel_acceso" required name="departamento_p">
                                                <option value="{{ $contact->departamento_p }} ">{{ $contact->departamento_p }} </option>
                                                <option value="Beni"> Beni</option>
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
                                            <select class="form-control" id="nivel_acceso" required name="sexo_p"  value=  />
                                                <option value="{{ $contact->sexo_p }}">{{ $contact->sexo_p }}</option>
                                                <option value="Femenino"> Femenino</option>
                                                <option value="Masculino">Masculino</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Fecha de Nacimiento:</label>
                                            <input type="date" class="form-control" required name="fechanac_p" value={{ $contact->fechanac_p }} />
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Correo Electronico:</label>
                                            <input type="email" class="form-control" required name="correo_p" value={{ $contact->correo_p }} />
                                        </div>
                                        <label for="name"></label>
                                        <button style="margin-left: 8px;" type="submit" class="btn btn-primary btn-lg badge-block">Actualizar</button>
                                </div>
                          
                        </div>
                </form>
            </div> 
        </div>
    </div>
</div>
@endsection
