@extends('layouts.main')

@section('template_title')
    {{ $alumno->name ?? 'Show Alumno' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Alumno</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('alumnos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Alumno:</strong>
                            {{ $alumno->id_alumno }}
                        </div>
                        <div class="form-group">
                            <strong>Nombres:</strong>
                            {{ $alumno->nombres }}
                        </div>
                        <div class="form-group">
                            <strong>Apellidos:</strong>
                            {{ $alumno->apellidos }}
                        </div>
                        <div class="form-group">
                            <strong>Carnet:</strong>
                            {{ $alumno->carnet }}
                        </div>
                        <div class="form-group">
                            <strong>Id Grado:</strong>
                            {{ $alumno->id_grado }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre De Madre:</strong>
                            {{ $alumno->nombre_de_madre }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre De Padre:</strong>
                            {{ $alumno->nombre_de_padre }}
                        </div>
                        <div class="form-group">
                            <strong>Edad:</strong>
                            {{ $alumno->edad }}
                        </div>
                        <div class="form-group">
                            <strong>Nota Final:</strong>
                            {{ $alumno->nota_final }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $alumno->estado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
