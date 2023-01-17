@extends('layouts.main')

@section('template_title')
    Grado
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Grado') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('grados.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Id Grado</th>
										<th>Nombre</th>
										<th>Estado</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($grados as $grado)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $grado->id_grado }}</td>
											<td>{{ $grado->nombre }}</td>
											<td>{{ $grado->estado }}</td>

                                            <td>
                                                <form action="{{ route('grados.destroy',$grado->id_grado) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('grados.show',$grado->id_grado) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('grados.edit',$grado->id_grado) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $grados->links() !!}
            </div>
        </div>
    </div>
@endsection
