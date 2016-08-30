@extends('admin/plantilla/layout')
@section('content')
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>{{ trans('mensajes.edit_tipo_um') }}</h5>
            </div>
            {!! Form::model($unidad,['route' => ['admin.tipounidadmedida.update', $unidad->id], 'method' => 'PUT', 'class' => 'form-horizontal', 'id' => 'frmTipoUM']) !!}
            <div class="ibox-content">
                @include('admin.tipounidadmedida.fields')
            </div>
            <div class="ibox-content">
                <button type="submit" name="form[submit]" class="btn btn-success btn-sm">
                    <i class="glyphicon glyphicon-floppy-disk"></i>
                    {{ trans('mensajes.actualizar') }}
                </button>
                <a class="btn btn-danger btn-sm" href="{{ route('admin.tipounidadmedida.index') }}">
                    <i class="glyphicon glyphicon-remove"></i>
                    {{ trans('mensajes.cerrar') }}
                </a>
            </div>
            {!! Form::close() !!}

        </div>
    </div>
@endsection
@section('js')
    <script src="{{ asset('js/tipounidadmedida/tipoUnidadMedida.js') }}"></script>

    <script type="text/javascript">
        jQuery(document).ready(function() {
            tipoUnidadMedida.new();
        });
    </script>
@endsection