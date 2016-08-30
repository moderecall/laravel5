{{--<html>--}}
	{{--<head>--}}
		{{--<title>Laravel</title>--}}
		{{----}}
		{{--<link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>--}}

		{{--<style>--}}
			{{--body {--}}
				{{--margin: 0;--}}
				{{--padding: 0;--}}
				{{--width: 100%;--}}
				{{--height: 100%;--}}
				{{--color: #B0BEC5;--}}
				{{--display: table;--}}
				{{--font-weight: 100;--}}
				{{--font-family: 'Lato';--}}
			{{--}--}}

			{{--.container {--}}
				{{--text-align: center;--}}
				{{--display: table-cell;--}}
				{{--vertical-align: middle;--}}
			{{--}--}}

			{{--.content {--}}
				{{--text-align: center;--}}
				{{--display: inline-block;--}}
			{{--}--}}

			{{--.title {--}}
				{{--font-size: 96px;--}}
				{{--margin-bottom: 40px;--}}
			{{--}--}}

			{{--.quote {--}}
				{{--font-size: 24px;--}}
			{{--}--}}
		{{--</style>--}}
	{{--</head>--}}
	{{--<body>--}}
		{{--<div class="container">--}}
			{{--<div class="content">--}}
				{{--<div class="title">Laravel 5</div>--}}
				{{--<div class="quote">{{ Inspiring::quote() }}</div>--}}
			{{--</div>--}}
		{{--</div>--}}
	{{--</body>--}}
{{--</html>--}}
@extends('admin/plantilla/layout')
@section('content')
<div class="col-lg-12">
    <div class="ibox float-e-margins">
        <div class="ibox-content">
            panel de administración
        </div>
    </div>
    {{--<div class="ibox float-e-margins">--}}
        {{--<div class="ibox-title">--}}
            {{--<h5>Basic IN+ Panel <small class="m-l-sm">This is custom panel</small></h5>--}}
            {{--<div class="ibox-tools">--}}
                {{--<a class="collapse-link">--}}
                    {{--<i class="fa fa-chevron-up"></i>--}}
                {{--</a>--}}
                {{--<a class="dropdown-toggle" data-toggle="dropdown" href="#">--}}
                    {{--<i class="fa fa-wrench"></i>--}}
                {{--</a>--}}
                {{--<ul class="dropdown-menu dropdown-user">--}}
                    {{--<li><a href="#">Config option 1</a>--}}
                    {{--</li>--}}
                    {{--<li><a href="#">Config option 2</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
                {{--<a class="close-link">--}}
                    {{--<i class="fa fa-times"></i>--}}
                {{--</a>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="ibox-content">--}}
            {{--<h2 >--}}
                {{--This is standard IN+ Panel<br/>--}}
            {{--</h2>--}}
            {{--<p>--}}
                {{--<strong>Lorem ipsum dolor</strong>--}}
                {{--Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. </p>--}}
            {{--<p>--}}
                {{--<small>--}}
                    {{--Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.--}}
                {{--</small>--}}
            {{--</p>--}}
        {{--</div>--}}
    {{--</div>--}}
    </div>

@endsection