@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
    <div class="col-sm-8 offset-sm-2">
         <center><h1 style="text-align: center;padding: 15px;color: green;">ACTUALIZAR DATOS </h1></center>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br />
        @endif
        <form method="post" action="{{ route('paciente.update', $contact->id_p) }}">
            @method('PATCH')
            @csrf
            <div class="form-group">

                <div class="form-group">
                        <div class="form-group">
                            <label for="name">CI:</label>
                            <input type="number" class="form-control" required name="ci_p"value={{ $contact->ci_p }} />
                        </div>
                        <div class="form-group">
                            <label for="name">Nombre:</label>
                            <input type="text" class="form-control" required name="nombre_p" value={{ $contact->nombre_p }} />
                        </div>
                        <div class="form-group">
                            <label for="name">Apellidos:</label>
                            <input type="text" class="form-control" required name="apellidos_p" value={{ $contact->apellidos_p }} />
                        </div>
                        <div class="form-group">
                            <label for="name">Edad:</label>
                            <input type="number" class="form-control" required name="edad_p" value={{ $contact->edad_p }} />
                        </div>
                        <div class="form-group">
                            <label for="name">Telefono:</label>
                            <input type="text" class="form-control" required name="telefono_p" value={{ $contact->telefono_p }} />
                        </div>
                        <div class="form-group">
                            <label for="name">Direccion:</label>
                            <input type="text" class="form-control" required name="direccion_p" value={{ $contact->direccion_p }} />
                        </div>
                        <div class="form-group">
                            <label for="nivel_acceso">Departamento:</label>
                            <select class="form-control" id="nivel_acceso" name="departamento_p"  value={{ $contact->departamento_p }}   />
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
                            <select class="form-control" id="nivel_acceso" name="sexo_p"  value={{ $contact->sexo_p }}  />
                                <option value="">Seleccione un sexo</option>
                                <option value="Masculino">Masculino</option>
                                <option value="Femenino"> Femenino</option>
                                <option value="otros">otros</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="name">Fecha de Nacimiento:</label>
                            <input type="date" class="form-control" required name="fechanac_p" value={{ $contact->fechanac_p }} />
                        </div>
                        <div class="form-group">
                            <label for="name">correo:</label>
                            <input type="email" class="form-control" required name="correo_p" value={{ $contact->correo_p }} />
                        </div>
                        <div class="form-group">
                            <label for="name">consultorio:</label>
                            <input type="text" class="form-control" required name="f_consultorio" value={{ $contact->f_consultorio }} />
                        </div>
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Update</button>
        </form>
    </div>
</div>
@endsection
