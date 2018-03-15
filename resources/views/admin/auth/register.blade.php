@extends('admin.template.main')
@section('title', 'Registro de usuarios')
@section('title-panel', 'Registrar Usuario')
@section('content')
	{!! Form::open(['route' => 'admin.users.store', 'method' => 'POST']) !!}
		<div class="form-group">
			{!! Form::label('name', 'Nombre' ) !!}
			{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese Su Usuario', 'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('email', 'E-Mail' ) !!}
			{!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Ingrese Su E-Mail', 'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('password', 'Contraseña' ) !!}
			{!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Ingrese Su Contraseña', 'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('type', 'Tipo' ) !!}
			{!! Form::select('type', ['member' => 'Miembro', 'admin' => 'Administrador'], null,['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Registrar Usuario', ['class' => 'btn btn-primary']) !!}</div>
		</div>
	{!! Form::close() !!}
@endsection