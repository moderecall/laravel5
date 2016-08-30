<div class="form-group">
    {!! Form::label('nombre', trans('mensajes.nombre'), array('class' => 'control-label col-md-3')) !!}
    <span aria-required="true" class="required">*</span>
    <div class="col-md-4">
        {!! Form::text('nombre', null, array('class' => 'form-control required contracaracteres')) !!}
        @if ($errors->first('nombre'))
        <span class="error">{{ $errors->first('nombre') }}</span>
        @endif
    </div>
</div>

