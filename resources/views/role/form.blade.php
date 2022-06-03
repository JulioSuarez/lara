<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('rol') }}
            {{ Form::text('rol', $role->rol, ['class' => 'form-control' . ($errors->has('rol') ? ' is-invalid' : ''), 'placeholder' => 'Rol']) }}
            {!! $errors->first('rol', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descrpcion') }}
            {{ Form::text('descrpcion', $role->descrpcion, ['class' => 'form-control' . ($errors->has('descrpcion') ? ' is-invalid' : ''), 'placeholder' => 'Descrpcion']) }}
            {!! $errors->first('descrpcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>