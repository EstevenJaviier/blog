<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <title>@yield('title', 'default') | Semillero-IN</title>
  <link rel="stylesheet" type="text/css" href="{{ asset('framework/vista/css/style.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('framework/vista/css/bootstrap.css') }}">
  <link rel="stylesheet" href="{{ asset('framework/vista/css/foter.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('framework/vista/css/font-awesome.css') }}">
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#toggle-menu" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="{{ route('vistas.index') }}">
		      	<img src="{{ asset('framework/vista/img/ss.png') }}" alt="reg">
		      </a>
		    </div>
		    <div class="collapse navbar-collapse" id="toggle-menu">
			<ul class="nav navbar-nav">
				<li><a href="">Two</a></li>
				<li><a href="">Three</a></li>
				<li><a href="">Four</a></li>
			</ul>
			{!! Form::open(['url' => '/', 'method' => 'GET', 'class' => 'navbar-form navbar-right']) !!}
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Search">
				</div>
				<button type="submit" class="btn btn-default">Buscar</button>
			{!! Form::close() !!}
		</div>
	</nav>

	@yield('content')	

	<br><br><br>

	<footer class="footer text-center">
		<div class="footer-header">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<h3>Ayudanos a crecer</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum unde quibusdam veritatis, saepe sed vero voluptatum, impedit quas magnam veniam temporibus fugit nam beatae! Velit iusto animi non consequuntur fugiat!</p>
					</div>

					<div class="col-md-4">
						<h3>Únete al debate</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga modi error aperiam odio itaque quas culpa omnis ad. Ea omnis dolores aperiam atque unde, assumenda? Necessitatibus reiciendis, autem ab velit.</p>
					</div>

					<div class="col-md-4">
						<h3>Siguenos en</h3>
						<a href="" class="btn btn-primary"><span class="icon facebook"></span></a>
						<a href="" class="btn btn-primary"><span class="icon twitter"></span></a>
						<a href="" class="btn btn-primary"><span class="icon instagram"></span></a>
					</div>
				</div>
			</div>
		</div>	
		<div class="footer-copyright">
			<div class="container">
				<p class="pull-left" style="font-size: 13px;">Todos los derechos reservados © 2015</p>
				<div class="pull-right">Made with ♥ by EstevenJaviier</div>
			</div>
		</div>
	</footer>

  <!-- jQuery JavaScript plugins) -->
  <script src="{{ asset('framework/vista/js/jquery.min.js') }}"></script>
  <!-- Include all compiled plugins -->
  <script src="{{ asset('framework/vista/js/bootstrap.min.js') }}"></script> 
</body>
</html>
