@extends('layouts.main')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Reportes') }}
                            </span>

                            {{-- <div class="float-right">
                                <a href="{{ route('grados.create') }}" class="btn btn-primary btn-sm float-right"
                                    data-placement="left">
                                    {{ __('Create New') }}
                                </a>
                            </div> --}}
                        </div>
                    </div>


                    <div class="card-body">
                        <div class="row">

                            <div class="col-4">
                                <div class="card" style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">Reporte de alumnos activos</h5>
                                        <p class="card-text">Listado general.</p>
                                        <a target="_blank" href="{{ route('reporte.alumnos') }}" class="btn btn-success">Descargar</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-4">
                                <div class="card" style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">Reporte de alumnos aprobados</h5>
                                        <p class="card-text">Aprobados nota mayor 6.</p>
                                        <a target="_blank" href="{{ route('reporte.aprobados') }}" class="btn btn-success">Descargar</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-4">
                                <div class="card" style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">Reporte de alumnos aprobados</h5>
                                        <p class="card-text">Aprobados nota menor 6.</p>
                                        <a target="_blank" href="{{ route('reporte.reprobados') }}" class="btn btn-success">Descargar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
