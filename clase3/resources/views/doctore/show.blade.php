@extends('layouts.app')

@section('template_title')
    {{ $doctore->name ?? 'Show Doctore' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Doctore</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('doctores.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombres:</strong>
                            {{ $doctore->nombres }}
                        </div>
                        <div class="form-group">
                            <strong>Apellidos:</strong>
                            {{ $doctore->apellidos }}
                        </div>
                        <div class="form-group">
                            <strong>Celular:</strong>
                            {{ $doctore->celular }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $doctore->email }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $doctore->direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Especialidad:</strong>
                            {{ $doctore->especialidad }}
                        </div>
                        <div class="form-group">
                            <strong>Matricula:</strong>
                            {{ $doctore->matricula }}
                        </div>
                        <div class="form-group">
                            <strong>Observacion:</strong>
                            {{ $doctore->observacion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
