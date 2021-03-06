<div class="form-group">
    {!! Form::label('descripcion', trans('mensajes.descripcion'), array('class' => 'control-label col-md-3')) !!}
    <span aria-required="true" class="required">*</span>
    <div class="col-md-4">
        {!! Form::text('descripcion', null, array('class' => 'form-control required contracaracteres')) !!}
        @if ($errors->first('descripcion'))
            <span class="error">{{ $errors->first('descripcion') }}</span>
        @endif
    </div>
</div>

<div class="form-group">
    {!! Form::label('siglas', trans('mensajes.siglas'), array('class' => 'control-label col-md-3')) !!}
    <span aria-required="true" class="required">*</span>
    <div class="col-md-1">
        {!! Form::text('siglas', null, array('class' => 'form-control required contracaracteres', 'maxlength' => 2)) !!}
        @if ($errors->first('siglas'))
            <span class="error">{{ $errors->first('siglas') }}</span>
        @endif
    </div>
</div>

