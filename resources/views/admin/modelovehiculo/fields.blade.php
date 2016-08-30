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
    {!! Form::label('tipovehiculo_id', trans('mensajes.tipo_vehiculo'), array('class' => 'control-label col-md-3')) !!}
    <span aria-required="true" class="required">*</span>
    <div class="col-md-4">
        {!! Form::select('tipovehiculo_id', $tipos['list'], $tipos['select'], array('class' => 'form-control required select2me', 'placeholder' => 'Seleccione..')) !!}
        @if ($errors->first('tipovehiculo_id'))
            <span class="error">{{ $errors->first('tipovehiculo_id') }}</span>
        @endif
    </div>
</div>

<div class="form-group">
    {!! Form::label('marca_id', trans('mensajes.marca_vehiculo'), array('class' => 'control-label col-md-3')) !!}
    <span aria-required="true" class="required">*</span>
    <div class="col-md-4">
        {!! Form::select('marca_id', $marcas['list'], $marcas['select'], array('class' => 'form-control required select2me', 'placeholder' => 'Seleccione..')) !!}
        @if ($errors->first('marca_id'))
            <span class="error">{{ $errors->first('marca_id') }}</span>
        @endif
    </div>
</div>
