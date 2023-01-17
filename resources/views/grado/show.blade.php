@extends('layouts.main')

@section('template_title')
    {{ $grado->name ?? 'Show Grado' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Grado</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('grados.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Grado:</strong>
                            {{ $grado->id_grado }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $grado->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $grado->estado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
