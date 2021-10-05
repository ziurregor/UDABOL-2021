@extends('layouts.asistente')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3> <i class="fa fa-users"></i> Listado de Asistentes <a href="asistente/create"><button class="btn btn-success"><i class="fa fa-user-plus"></i></button></a></h3>
		@include('registros.asistente.search')
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>CI</th>
					<th>Nombre</th>
					<th>Apellidos</th>
                    <th>Correo</th>
                    <th>Celular</th>
					<th>Opciones</th>
				</thead>
               @foreach ($asistentes as $asis)
				<tr>
					<td>{{ $asis->ci}}</td>
					<td>{{ $asis->nombre}}</td>
					<td>{{ $asis->apellidos}}</td>
                    <td>{{ $asis->correo}}</td>
					<td>{{ $asis->celular}}</td>
					<td>
						<a href="{{URL::action('App\Http\Controllers\asistenteController@edit',$asis->ci)}}"><button class="btn btn-info"> <i class="fa fa-edit"></i> </button></a>
                        <a href="" data-target="#modal-delete-{{$asis->ci}}" data-toggle="modal"><button class="btn btn-danger"> <i class="fa fa-trash"></i> </button></a>
					</td>
				</tr>
				@include('registros.asistente.modal')
				@endforeach
			</table>
		</div>
		{{$asistentes->render()}}
	</div>
</div>

@endsection