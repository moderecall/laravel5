@extends('admin/plantilla/layout')
@section('content')
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>{{ trans('mensajes.list_tipo_um') }}</h5>
                <div class="ibox-tools">
                    <a class="btn btn-success btn-sm" href="{{ route('admin.tipounidadmedida.create') }}">
                        <i class="glyphicon glyphicon-plus"></i>
                        {{ trans('mensajes.nuevo') }}
                    </a>
                    <a class="btn btn-danger btn-sm" id="btneliminar">
                        <i class="fa fa-trash"></i>
                        {{ trans('mensajes.eliminar') }}
                    </a>
                </div>
            </div>
            <div class="ibox-content">
                <table class="table table-striped table-hover" id="tblTipoUM">
                    <thead>
                    <tr>
                        <th class="table-checkbox">
                            <input type="checkbox" class="group-checkable" data-set="#tblTipoUM .checkboxes"/>
                        </th>
                        <th>{{ trans('mensajes.descripcion')  }}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($unidades as $unidad)
                        <tr>
                            <td>
                                <input type="checkbox" class="checkboxes" value="{{ $unidad->id }}"/>
                            </td>
                            <td>
                                <a href="{{ route('admin.tipounidadmedida.edit', $unidad) }}" title="{{ trans('mensajes.editar') }}">
                                    {{ $unidad->descripcion  }}
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script src="{{ asset('js/_comun/jquery.dataTableManaged.js') }}"></script>
    <script src="{{ asset('js/tipounidadmedida/tipoUnidadMedida.js') }}"></script>
    <script>
        jQuery(document).ready(function() {
            var success = '{{ session("success") }}'; // para mostrar mensajes de notificacion
            var errors = '{{ session("errors") }}'; // para mostrar mensajes de notificacion
            var token = '{{{ csrf_token() }}}'; // para eliminar
            var delete_link = "{{ route('base_eliminar') }}";
            tipoUnidadMedida.index(delete_link, token, success, errors);
        });
    </script>
@endsection