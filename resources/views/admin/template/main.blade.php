<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <title>@yield('title', 'Welcome') | Semilleri IN</title>
  	<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,700" rel="stylesheet" type="text/css">
	<link href="{{ asset('framework/icon/css/font-awesome.css') }}" rel="stylesheet">
	<link href="{{ asset('framework/css/style.css') }}" rel="stylesheet">
	<link href="{{ asset('framework/css/bootstrap.css') }}" rel="stylesheet">
	<link href="{{ asset('framework/chosen/chosen.css') }}" rel="stylesheet">
	<link href="{{ asset('framework/Trumbowyg/dist/ui/trumbowyg.css') }}" rel="stylesheet">
	<link href="{{ asset('framework/bootstrap-fileinput/css/fileinput.css') }}" rel="stylesheet">
	<link href="{{ asset('css/sweetalert.css') }}" rel="stylesheet">
</head>
<style type="text/css" media="screen">
	*,
	body,
	html {
		font-family: 'Raleway';
	}
	.ft_perfil {
		width: 25px;
		border-radius: 100%;
	}
</style>
<body>
	<nav class="navbar navbar-default">
		<div class="container">
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#toggle-menu" aria-expanded="false">
			    <span class="sr-only">Toggle navigation</span>
			    <span class="icon-bar"></span>
			    <span class="icon-bar"></span>
			    <span class="icon-bar"></span>
			  </button>
			  <a href="{{ route('vistas.index') }}" class="navbar-brand">Tienda aldacor</a>
			</div>

			<div class="collapse navbar-collapse" id="toggle-menu">
			<ul class="nav navbar-nav navbar-right">
				@if (Auth::guest())
						<li><a href="{{ route('admin.auth.login') }}">Iniciar sesion</a></li>
						<li><a href="">Registrarse</a></li>
				@else
				<li class="dropdown">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> {!! $user = Auth::user()->name; !!} <span class="caret"></span></a>
				  <ul class="dropdown-menu">
				    <li><a href="{{ route('admin.auth.logout') }}"><i class="icon sign-out"></i> Cerrar Sesion</a></li>
				  </ul>
				</li>
			</ul>

			<ul class="nav navbar-nav">
				<li><a href="{{ route('admin.users.index') }}"><i class="icon users"></i> Usuarios</a></li>
				<li><a href="{{ route('admin.categories.index') }}"><i class="icon book"></i> Categorias</a></li>
				<li><a href="{{ route('admin.articles.index') }}"><i class="icon file"></i> Productos</a></li>
				<li><a href="{{ route('admin.images.index')}}"><i class="icon image"></i> Imagenes</a></li>
				<li><a href="{{ route('admin.tags.index') }}"><i class="icon tags"></i> Tags</a></li>
				@endif
			</ul>
			</div>
		</div>
	</nav>
	<div class="container">
		<div class="panel panel-default">
		  <div class="panel-heading">@yield('title-panel', 'Welcome')</div>
		  <div class="panel-body">
			@include('flash::message')
			@if (count($errors) > 0)
			<div class="alert alert-danger">
				<strong>Vaya!</strong> Hubo algunos problemas<br><br>
				<ul>
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
				</div>
			@endif
			@yield('content')
		  </div>
	</div>

	<div class="footer panel panel-default">
		<div class="panel-heading">
			Todos los derechos reservados © 2015
			<label class="pull-right">Made with ♥ by EstevenJaviier</label>
		</div>
	</div>

	<script src="{{ asset('framework/js/jquery.min.js') }}"></script>
	<script src="{{ asset('framework/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('framework/chosen/chosen.jquery.js') }}"></script>
	<script src="{{ asset('framework/Trumbowyg/dist/trumbowyg.js') }}"></script>
	<script src="{{ asset('framework/bootstrap-fileinput/js/fileinput.js') }}"></script>
	<script src="{{ asset('framework/chosen/chosen.mc.js') }}"></script>
	<script src="{{ asset('js/sweetalert.js') }}"></script>
	@include('Alerts::show')
</body>
</html>