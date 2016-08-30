<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="side-menu">
            <li class="nav-header">
                <div class="logo-element">
                    INw+
                </div>
            </li>
            <li>
                <a href="#"><i class="fa fa-list"></i> <span class="nav-label">{{ trans('menu.nomencla2') }}</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="{{ route('admin.estadoflete.index') }}">{{ trans('menu.esta2_flete') }}</a></li>
                    <li><a href="{{ route('admin.genero.index') }}">{{ trans('menu.genero') }}</a></li>
                    <li><a href="{{ route('admin.marca.index') }}">{{ trans('menu.marca') }}</a></li>
                    <li><a href="{{ route('admin.modelovehiculo.index') }}">{{ trans('menu.modelo_vehic') }}</a></li>
                    <li><a href="{{ route('admin.tipocarga.index') }}">{{ trans('menu.tip_carga') }}</a></li>
                    <li><a href="{{ route('admin.tipounidadmedida.index') }}">{{ trans('menu.tip_um') }}</a></li>
                    <li><a href="{{ route('admin.tipovehiculo.index') }}">{{ trans('menu.tip_vehiculo') }}</a></li>
                    <li><a href="{{ route('admin.unidadmedida.index') }}">{{ trans('menu.um') }}</a></li>
/                </ul>
            </li>
        </ul>

    </div>
</nav>