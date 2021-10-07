@extends('layouts.app')

@section('template_title')
    Doctore
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Doctore') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('doctores.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Nombres</th>
										<th>Apellidos</th>
										<th>Celular</th>
										<th>Email</th>
										<th>Direccion</th>
										<th>Especialidad</th>
										<th>Matricula</th>
										<th>Observacion</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($doctores as $doctore)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $doctore->nombres }}</td>
											<td>{{ $doctore->apellidos }}</td>
											<td>{{ $doctore->celular }}</td>
											<td>{{ $doctore->email }}</td>
											<td>{{ $doctore->direccion }}</td>
											<td>{{ $doctore->especialidad }}</td>
											<td>{{ $doctore->matricula }}</td>
											<td>{{ $doctore->observacion }}</td>

                                            <td>
                                                <form action="{{ route('doctores.destroy',$doctore->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('doctores.show',$doctore->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('doctores.edit',$doctore->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $doctores->links() !!}
            </div>
        </div>
    </div>
@endsection
