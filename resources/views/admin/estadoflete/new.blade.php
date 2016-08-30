@extends('admin/plantilla/layout')
@section('content')
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>{{ trans('mensajes.crear_estado_flete') }}</h5>
            </div>
            {!! Form::open(['route' => 'admin.estadoflete.store', 'method' => 'POST', 'class' => 'form-horizontal', 'id' => 'frmEstadoF']) !!}
            <div class="ibox-content">
                @include('admin.estadoflete.fields')
            </div>
            <div class="ibox-content">
                <button type="submit" name="form[submit]" class="btn btn-success btn-sm">
                    <i class="glyphicon glyphicon-floppy-disk"></i>
                    {{ trans('mensajes.salvar') }}
                </button>
                <a class="btn btn-danger btn-sm" href="{{ route('admin.estadoflete.index') }}">
                    <i class="glyphicon glyphicon-remove"></i>
                    {{ trans('mensajes.cerrar') }}
                </a>
            </div>
            {!! Form::close() !!}

        </div>
    </div>
@endsection
@section('js')
    <script src="{{ asset('js/estadoflete/estadoFlete.js') }}"></script>

    <script type="text/javascript">
        jQuery(document).ready(function() {
            estadoFlete.new();
        });
    </script>
@endsection