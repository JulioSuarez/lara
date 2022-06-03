<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('Elegir Rol') }}
            {{ Form::select('roles_id', $roles, $empleado->roles_id, ['class' => 'form-control' . ($errors->has('roles_id') ? ' is-invalid' : ''), 'placeholder' => 'Eliga el Cargo']) }}
            {!! $errors->first('roles_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $empleado->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('paterno') }}
            {{ Form::text('paterno', $empleado->paterno, ['class' => 'form-control' . ($errors->has('paterno') ? ' is-invalid' : ''), 'placeholder' => 'Paterno']) }}
            {!! $errors->first('paterno', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('materno') }}
            {{ Form::text('materno', $empleado->materno, ['class' => 'form-control' . ($errors->has('materno') ? ' is-invalid' : ''), 'placeholder' => 'Materno']) }}
            {!! $errors->first('materno', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('sexo') }}
            {{ Form::text('sexo', $empleado->sexo, ['class' => 'form-control' . ($errors->has('sexo') ? ' is-invalid' : ''), 'placeholder' => 'Sexo']) }}
            {!! $errors->first('sexo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_nacimiento') }}
            {{ Form::date('fecha_nacimiento', $empleado->fecha_nacimiento, ['class' => 'form-control' . ($errors->has('fecha_nacimiento') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Nacimiento']) }}
            {!! $errors->first('fecha_nacimiento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_ingreso') }}
            {{ Form::date('fecha_ingreso', $empleado->fecha_ingreso, ['class' => 'form-control' . ($errors->has('fecha_ingreso') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Ingreso']) }}
            {!! $errors->first('fecha_ingreso', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('telefono') }}
            {{ Form::number('telefono', $empleado->telefono, ['class' => 'form-control' . ($errors->has('telefono') ? ' is-invalid' : ''), 'placeholder' => 'Telefono']) }}
            {!! $errors->first('telefono', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('estado') }}
            {{ Form::text('estado', $empleado->estado, ['class' => 'form-control' . ($errors->has('estado') ? ' is-invalid' : ''), 'placeholder' => 'Estado']) }}
            {!! $errors->first('estado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripcion_turno') }}
            {{ Form::text('descripcion_turno', $empleado->descripcion_turno, ['class' => 'form-control' . ($errors->has('descripcion_turno') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion Turno']) }}
            {!! $errors->first('descripcion_turno', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('hora_entrada') }}
            {{ Form::time('hora_entrada', $empleado->hora_entrada, ['class' => 'form-control' . ($errors->has('hora_entrada') ? ' is-invalid' : ''), 'placeholder' => 'Hora Entrada']) }}
            {!! $errors->first('hora_entrada', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('hora_salida') }}
            {{ Form::time('hora_salida', $empleado->hora_salida, ['class' => 'form-control' . ($errors->has('hora_salida') ? ' is-invalid' : ''), 'placeholder' => 'Hora Salida']) }}
            {!! $errors->first('hora_salida', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
