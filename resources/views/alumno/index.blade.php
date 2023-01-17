@extends('layouts.main')

@section('template_title')
    Alumno
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Alumno') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('alumnos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Id Alumno</th>
										<th>Nombres</th>
										<th>Apellidos</th>
										<th>Carnet</th>
										<th>Grado</th>
										<th>Nombre De Madre</th>
										<th>Nombre De Padre</th>
										<th>Edad</th>
										<th>Nota Final</th>
										{{-- <th>Estado</th> --}}

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($alumnos as $alumno)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $alumno->id_alumno }}</td>
											<td>{{ $alumno->nombres }}</td>
											<td>{{ $alumno->apellidos }}</td>
											<td>{{ $alumno->carnet }}</td>
											<td>{{ $alumno->grado->nombre }}</td>
											<td>{{ $alumno->nombre_de_madre }}</td>
											<td>{{ $alumno->nombre_de_padre }}</td>
											<td>{{ $alumno->edad }}</td>
											<td>{{ $alumno->nota_final }}</td>
											{{-- <td>{{ $alumno->estado }}</td> --}}

                                            <td>
                                                <form action="{{ route('alumnos.destroy',$alumno->id_alumno) }}" method="POST">
                                                    <a target="_blank" class="btn btn-sm btn-primary " href="{{ route('reporte.alumno',$alumno->id_alumno) }}"><i class="fa fa-fw fa-eye"></i>PDF</a>
                                                    <a class="btn btn-sm btn-primary " href="{{ route('alumnos.show',$alumno->id_alumno) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('alumnos.edit',$alumno->id_alumno) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $alumnos->links() !!}
            </div>
        </div>
    </div>
@endsection
