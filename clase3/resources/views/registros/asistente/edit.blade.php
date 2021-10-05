@extends ('layouts.asistente')
@section ('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Editar Asistente <i class="fa fa-user"></i>: {{ $asistente->ci}}</h3>
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
				@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
				</ul>
			</div>
			@endif

			{!!Form::model($asistente,['method'=>'PATCH','route'=>['asistente.update',$asistente->ci]])!!}
            {{Form::token()}}
            <div class="form-group">
            	<label for="nombre">Nombre</label>
            	<input type="text" name="nombre" class="form-control" value="{{$asistente->nombre}}" placeholder="Nombre . . .">
            </div>
            <div class="form-group">
            	<label for="apellidos">Apellidos</label>
            	<input type="text" name="apellidos" class="form-control" value="{{$asistente->apellidos}}" placeholder="Apellidos . . .">
            </div>
            <div class="form-group">
            	<label for="correo">Correo</label>
            	<input type="email" name="correo" class="form-control" value="{{$asistente->correo}}" placeholder="Correo . . .">
            </div>
            <div class="form-group">
            	<label for="celular">Celular</label>
            	<input type="number" name="celular" class="form-control" value="{{$asistente->celular}}" placeholder="Celular . . .">
            </div>
            <div class="form-group">
            	<button class="btn btn-success fa fa-upload" type="submit"> Guardar</button>
            	<button class="btn btn-primary fa fa-check" type="reset"> Limpiar</button>
            	<button class="btn btn-danger fa fa-reply" type="reset" onClick="history.go(-1);"> Cancelar</button>
            </div>

			{!!Form::close()!!}		
            
		</div>
	</div>
@endsection