<div class="box box-info padding-1">
    <div class="box-body">
        
        {{-- <div class="form-group">
            {{ Form::label('id_alumno') }}
            {{ Form::text('id_alumno', $alumno->id_alumno, ['class' => 'form-control' . ($errors->has('id_alumno') ? ' is-invalid' : ''), 'placeholder' => 'Id Alumno']) }}
            {!! $errors->first('id_alumno', '<div class="invalid-feedback">:message</div>') !!}
        </div> --}}
        <div class="form-group">
            {{ Form::label('nombres') }}
            {{ Form::text('nombres', $alumno->nombres, ['class' => 'form-control' . ($errors->has('nombres') ? ' is-invalid' : ''), 'placeholder' => 'Nombres']) }}
            {!! $errors->first('nombres', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('apellidos') }}
            {{ Form::text('apellidos', $alumno->apellidos, ['class' => 'form-control' . ($errors->has('apellidos') ? ' is-invalid' : ''), 'placeholder' => 'Apellidos']) }}
            {!! $errors->first('apellidos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('carnet') }}
            {{ Form::text('carnet', $alumno->carnet, ['class' => 'form-control' . ($errors->has('carnet') ? ' is-invalid' : ''), 'placeholder' => 'Carnet']) }}
            {!! $errors->first('carnet', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_grado') }}
            {{ Form::select('id_grado', $grados ,$alumno->id_grado, ['class' => 'form-control' . ($errors->has('id_grado') ? ' is-invalid' : ''), 'placeholder' => 'Id Grado']) }}
            {!! $errors->first('id_grado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre_de_madre') }}
            {{ Form::text('nombre_de_madre', $alumno->nombre_de_madre, ['class' => 'form-control' . ($errors->has('nombre_de_madre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre De Madre']) }}
            {!! $errors->first('nombre_de_madre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre_de_padre') }}
            {{ Form::text('nombre_de_padre', $alumno->nombre_de_padre, ['class' => 'form-control' . ($errors->has('nombre_de_padre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre De Padre']) }}
            {!! $errors->first('nombre_de_padre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('edad') }}
            {{ Form::text('edad', $alumno->edad, ['class' => 'form-control' . ($errors->has('edad') ? ' is-invalid' : ''), 'placeholder' => 'Edad']) }}
            {!! $errors->first('edad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nota_final') }}
            {{ Form::text('nota_final', $alumno->nota_final, ['class' => 'form-control' . ($errors->has('nota_final') ? ' is-invalid' : ''), 'placeholder' => 'Nota Final']) }}
            {!! $errors->first('nota_final', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        {{-- <div class="form-group">
            {{ Form::label('estado') }}
            {{ Form::text('estado', $alumno->estado, ['class' => 'form-control' . ($errors->has('estado') ? ' is-invalid' : ''), 'placeholder' => 'Estado']) }}
            {!! $errors->first('estado', '<div class="invalid-feedback">:message</div>') !!}
        </div> --}}

    </div>
    <br>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>