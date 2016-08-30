<!DOCTYPE html>
<head>
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INSPINIA | Page</title>

    <!-- CSS Files -->
    <link href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('fonts/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- Plugins styles START -->
    <link href="{{ asset('plugins/bootstrap-datatables/dataTables.bootstrap.css') }}" rel="stylesheet">

    <!-- Select2 -->
    <link href="{{ asset('plugins/select2/select2.css') }}" rel="stylesheet">

    <!-- Toastr -->
    <link href="{{ asset('plugins/bootstrap-toastr/toastr.css') }}" rel="stylesheet">

    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">

    @yield('css')
</head>
<body>
<div id="wrapper" class="skin-1">
    @include('admin/plantilla/menu')

    <div id="page-wrapper" class="gray-bg animated fadeIn">
        <div class="row border-bottom">
            <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                </div>
                <ul class="nav navbar-top-links navbar-right">
                    <li>
                        <span class="m-r-sm text-muted welcome-message">{{ trans('mensajes.encabezado_administracion') }}</span>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                            <i class="fa fa-envelope"></i>  <span class="label label-warning">16</span>
                        </a>
                        <ul class="dropdown-menu dropdown-messages">
                            <li>
                                <div class="dropdown-messages-box">
                                    <a href="profile.html" class="pull-left">
                                        <img alt="image" class="img-circle" src="img/a7.jpg">
                                    </a>
                                    <div>
                                        <small class="pull-right">46h ago</small>
                                        <strong>Mike Loreipsum</strong> started following <strong>Monica Smith</strong>. <br>
                                        <small class="text-muted">3 days ago at 7:58 pm - 10.06.2014</small>
                                    </div>
                                </div>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <div class="dropdown-messages-box">
                                    <a href="profile.html" class="pull-left">
                                        <img alt="image" class="img-circle" src="img/a4.jpg">
                                    </a>
                                    <div>
                                        <small class="pull-right text-navy">5h ago</small>
                                        <strong>Chris Johnatan Overtunk</strong> started following <strong>Monica Smith</strong>. <br>
                                        <small class="text-muted">Yesterday 1:21 pm - 11.06.2014</small>
                                    </div>
                                </div>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <div class="dropdown-messages-box">
                                    <a href="profile.html" class="pull-left">
                                        <img alt="image" class="img-circle" src="img/profile.jpg">
                                    </a>
                                    <div>
                                        <small class="pull-right">23h ago</small>
                                        <strong>Monica Smith</strong> love <strong>Kim Smith</strong>. <br>
                                        <small class="text-muted">2 days ago at 2:30 am - 11.06.2014</small>
                                    </div>
                                </div>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <div class="text-center link-block">
                                    <a href="mailbox.html">
                                        <i class="fa fa-envelope"></i> <strong>Read All Messages</strong>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                            <i class="fa fa-bell"></i>  <span class="label label-primary">8</span>
                        </a>
                        <ul class="dropdown-menu dropdown-alerts">
                            <li>
                                <a href="mailbox.html">
                                    <div>
                                        <i class="fa fa-envelope fa-fw"></i> You have 16 messages
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="profile.html">
                                    <div>
                                        <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                        <span class="pull-right text-muted small">12 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="grid_options.html">
                                    <div>
                                        <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <div class="text-center link-block">
                                    <a href="notifications.html">
                                        <strong>See All Alerts</strong>
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>


                    <li>
                        <a href="login.html">
                            <i class="fa fa-sign-out"></i> {{ trans('mensajes.salir') }}
                        </a>
                    </li>
                </ul>

            </nav>
        </div>


        <div class="wrapper wrapper-content">
            <div class="row">
                @yield('content')
            </div>
        </div>


        <div class="footer">
            <div class="pull-right">
                10GB of <strong>250GB</strong> Free.
            </div>
            <div>
                <strong>Copyright</strong> Example Company &copy; 2014-2015
            </div>
        </div>

    </div>
</div>
    <!-- Mainly scripts -->
    <script src="{{ asset('js/_comun/jquery-2.1.1.js') }}"></script>
{{--    <script src="{{ asset('js/_comun/jquery-1.11.0.min.js') }}"></script>--}}
{{--    <script src="{{ asset('js/_comun/jquery-migrate-1.2.1.min.js') }}"></script>--}}
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>

    <script src="{{ asset('js/_comun/inspinia.js') }}"></script>

    <script src="{{ asset('plugins/metisMenu/jquery.metisMenu.js') }}"></script>
    <script src="{{ asset('plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>

    <script src="{{ asset('plugins/uniform/jquery.uniform.min.js') }}"></script>

    <!-- jQuery Datatables START-->
    <script src="{{ asset('plugins/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap-datatables/dataTables.bootstrap.js') }}"></script>
    <!-- jQuery Datatables END -->

    <!--jQuery Validation START-->
    <script src="{{ asset('plugins/jquery-validation/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('plugins/jquery-validation/js/additional-methods.js') }}"></script>
    <script src="{{ asset('plugins/jquery-validation/js/localization/messages_es.js') }}"></script>
    <!--jQuery Validation END-->

    <!-- Bootbox START (para emitir mensaje de confirmacion)-->
    <script src="{{ asset('plugins/bootbox/bootbox.min.js') }}"></script>
    <!-- Bootbox END -->

    <!-- jQuery Select2 START-->
    <script src="{{ asset('plugins/select2/select2.min.js') }}"></script>
    <!-- jQuery Select2 END-->

    <!-- jQuery Toastr START-->
    <script src="{{ asset('plugins/bootstrap-toastr/toastr.min.js') }}"></script>
    <!-- jQuery Select2 END-->

    <script src="{{ asset('js/_comun/mensajes.js') }}"></script>
    <script src="{{ asset('js/_comun/acciones_comunes.js') }}"></script>

@yield('js')
</body>