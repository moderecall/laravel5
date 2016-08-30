@extends('admin/plantilla/layout')
@section('content')
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>{{ trans('mensajes.list_modelo_vehiculo') }}</h5>
                <div class="ibox-tools">
                    <a class="btn btn-success btn-sm" href="{{ route('admin.modelovehiculo.create') }}">
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
                <table class="table table-striped table-hover" id="tblModVehic">
                    <thead>
                    <tr>
                        <th class="table-checkbox">
                            <input type="checkbox" class="group-checkable" data-set="#tblModVehic .checkboxes"/>
                        </th>
                        <th>{{ trans('mensajes.descripcion')  }}</th>
                        <th>{{ trans('mensajes.tipo_vehiculo')  }}</th>
                        <th>{{ trans('mensajes.marca_vehiculo')  }}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($modelos as $modelo)
                        <tr>
                            <td>
                                <input type="checkbox" class="checkboxes" value="{{ $modelo->id }}"/>
                            </td>
                            <td>
                                <a href="{{ route('admin.modelovehiculo.edit', $modelo) }}" title="{{ trans('mensajes.editar') }}">
                                    {{ $modelo->descripcion  }}
                                </a>
                            </td>
                            <td>{{ $modelo->tipoVehiculo->descripcion  }}</td>
                            <td>{{ $modelo->marca->nombre  }}</td>
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
    <script src="{{ asset('js/modelovehiculo/modeloVehiculo.js') }}"></script>
    <script>
        jQuery(document).ready(function() {
            var success = '{{ session("success") }}'; // para mostrar mensajes de notificacion
            var errors = '{{ session("errors") }}'; // para mostrar mensajes de notificacion
            var token = '{{{ csrf_token() }}}'; // para eliminar
            var delete_link = "{{ route('base_eliminar') }}";
            modeloVehiculo.index(delete_link, token, success, errors);
        });
    </script>
@endsection