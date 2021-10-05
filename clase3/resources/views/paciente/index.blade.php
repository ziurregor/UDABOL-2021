@extends('layouts.app')
@section('content')

<!-- Fonts -->
<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

<!-- Styles -->

<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<div class="container">
    <div class="row">
        <div class="col-sm-14">
                        <center><h1 style="text-align: center;padding: 15px;color: black; font-weight:bold;">LISTA DE PACIENTES</h1></center>
                    <div class="row">
                        <a style="margin: 19px;" href="{{ route('paciente.create')}}" class="btn btn-primary"><i style="font-size:20px;" class="bi bi-person-plus-fill"></i> Nuevo Registro</a>
                        <a style="margin: 19px;" href="{{ route('descargarPDFPacientes')}}" class="btn btn-danger"><i style="font-size:20px;" class="bi bi-bar-chart-line"></i> Generar Reporte</a>
                    </div>
                    <div class="row-12">
                        <nav class="navbar navbar-light float-right">
                            <form class="form-inline">
                                 <input name="nombre"  class="form-control mr-sm-2" type="search" placeholder="Buscar por Nombre " aria-label="Search">
                                <input name="apellido"  class="form-control mr-sm-2" type="search" placeholder="Buscar por Apellido " aria-label="Search">
                                <input name="ci"  class="form-control mr-sm-2" type="search" placeholder="Buscar por CI " aria-label="Search">
                                <button style="background-color: green;" class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="bi bi-search"></i> Buscar</button>
                            </form>
                         </nav>
                        <div class="content-body">
                            <table class="table table-responsive table-hover table-fixed">
                                <thead class="">
                                    <tr>
                                    <td style="font-weight:bold;">ID</td>
                                    <td style="font-weight:bold;">CI</td>
                                    <td style="font-weight:bold;">Nombres</td>
                                    <td style="font-weight:bold;">Apellidos</td>
                                    <td style="font-weight:bold;">Edad</td>
                                    <td style="font-weight:bold;">Telefono</td>
                                    <td style="font-weight:bold;">Direccion</td>
                                    <td style="font-weight:bold;">Departamento</td>
                                    <td style="font-weight:bold;">Sexo</td>
                                    <td style="font-weight:bold;">Fecha de Nacimiento</td>
                                    <td style="font-weight:bold;">Correo</td>
                                    <td style="font-weight:bold;" colspan = 2>Operaciones</td>
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
                                        <a href="{{ route('paciente.edit',$contact->id_p)}}"><i style="font-size:25px; color:black;" class="bi bi-pencil-square"></i></a>
                                        </td>
                                        <td>
                                            <form action="{{ route('paciente.destroy', $contact->id_p)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button style="border:none;" onclick="return ConfirmDelete()"><i style="font-size:25px;" class="bi bi-trash-fill"></i></button>
                                            </form>
                                        </td>
                                        </div>
                                    </tr>
                                    @endforeach
                                </tbody>
                           </table>
                        </div>
                    </div>
                    <center> {{ $contacts->links() }}</center> 
        </div>
    </div>
</div>
@endsection
 <!-- Scripts -->
 <script src="{{ asset('js/app.js') }}" defer></script>
 <script  type="text/javascript">
          function ConfirmDelete()
          {
            var respuesta = confirm("Estas Seguro de Elimar el Usuario?");
            if (respuesta == true)
            {
              return true;
            }
            else
            {
              return false;
            }
          }
</script>
 
