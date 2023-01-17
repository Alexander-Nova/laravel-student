<div class="box box-info padding-1">
    <div class="box-body">
        
        {{-- <div class="form-group">
            {{ Form::label('id_grado') }}
            {{ Form::text('id_grado', $grado->id_grado, ['class' => 'form-control' . ($errors->has('id_grado') ? ' is-invalid' : ''), 'placeholder' => 'Id Grado']) }}
            {!! $errors->first('id_grado', '<div class="invalid-feedback">:message</div>') !!}
        </div> --}}
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $grado->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        {{-- <div class="form-group">
            {{ Form::label('estado') }}
            {{ Form::text('estado', $grado->estado, ['class' => 'form-control' . ($errors->has('estado') ? ' is-invalid' : ''), 'placeholder' => 'Estado']) }}
            {!! $errors->first('estado', '<div class="invalid-feedback">:message</div>') !!}
        </div> --}}

    </div>
    <br>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>