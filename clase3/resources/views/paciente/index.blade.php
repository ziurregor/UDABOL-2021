@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <center><h1 style="text-align: center;padding: 15px;color: green;">LISTA DE PACIENTES</h1></center>
                <div>
                    <a style="margin: 19px;" href="{{ route('paciente.create')}}" class="btn btn-outline-success">New nuevo</a>
                </div>

                <div class="row-12">
                    <nav class="navbar navbar-light float-right">
                        <form class="form-inline">
                          <input name="nombre"  class="form-control mr-sm-2" type="search" placeholder="buscar por nombre " aria-label="Search">
                          <input name="apellido"  class="form-control mr-sm-2" type="search" placeholder="buscar por apellido " aria-label="Search">
                          <input name="ci"  class="form-control mr-sm-2" type="search" placeholder="buscar por Ci " aria-label="Search">
                          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                        </form>
                      </nav>
                      <div class="content-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                <th>ID</th>
                                <th>CI</th>
                                <th>Nombre</th>
                                <th>Apellidos</th>
                                <th>Edad</th>
                                <th>Telefono</th>
                                <th>Direccion</th>
                                <th>Departamento</th>
                                <th>Sexo</th>
                                <th>Fecha de Nacimiento</th>
                                <th>Correo</th>
                                <th colspan = 2>Actions</th>
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

                      </div>
                     <center> {{$contacts->render()}}</center>
                    
                </div>

        </div>
    </div>

</div>
@endsection
