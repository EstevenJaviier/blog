@extends('admin.template.main')
@section('title', 'Inicio De Sesíon')
@section('title-panel', 'Inicio De Sesíon')
@section('content')
	{!! Form::open(['route' => 'admin.auth.login', 'method' => 'POST']) !!}
			<div class="form-group">
				<label for="name">E-Mail</label>
				<input type="email" id="name" name="email" class="form-control" placeholder="Ingrese su usuario" required>
			</div>

			<div class="form-group">
				<label for="pass">Contraseña</label>
				<input id="pass" type="password" name="password" class="form-control" placeholder="•••••••••••••••••" required>
			</div>

			<div class="form-group">
				<input type="checkbox" id="check" name="remember">
				<label for="check">Acuérdate De Mí</label>
			</div>

			<div class="form-group">
				{!! Form::submit('Iniciar Sesion', ['class' => 'btn btn-primary']) !!}
			</div>
	{!! Form::close() !!}
@endsection