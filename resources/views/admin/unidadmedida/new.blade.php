@extends('admin/plantilla/layout')
@section('content')
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>{{ trans('mensajes.crear_um') }}</h5>
            </div>
            {!! Form::open(['route' => 'admin.unidadmedida.store', 'method' => 'POST', 'class' => 'form-horizontal', 'id' => 'frmUnidadM']) !!}
            <div class="ibox-content">
                @include('admin.unidadmedida.fields')
            </div>
            <div class="ibox-content">
                <button type="submit" name="form[submit]" class="btn btn-success btn-sm">
                    <i class="glyphicon glyphicon-floppy-disk"></i>
                    {{ trans('mensajes.salvar') }}
                </button>
                <a class="btn btn-danger btn-sm" href="{{ route('admin.unidadmedida.index') }}">
                    <i class="glyphicon glyphicon-remove"></i>
                    {{ trans('mensajes.cerrar') }}
                </a>
            </div>
            {!! Form::close() !!}

        </div>
    </div>
@endsection
@section('js')
    <script src="{{ asset('js/unidadmedida/unidadMedida.js') }}"></script>

    <script type="text/javascript">
        jQuery(document).ready(function() {
            unidadMedida.new();
        });
    </script>
@endsection
