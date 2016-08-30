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
