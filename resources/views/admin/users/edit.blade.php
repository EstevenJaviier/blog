@extends('admin.template.main')
@section('title', 'Editar El usuario | ' . $user->name)
@section('content')
@section('title-panel', 'Editar a ' . $user->name)
	
		{!! Form::open(['route' => ['admin.users.update', $user], 'method' => 'PUT']) !!}
			<div class="form-group">
				{!! Form::label('name', 'Nombre' ) !!}
				{!! Form::text('name', $user->name, ['class' => 'form-control', 'placeholder' => 'Ingrese Su Usuario', 'required']) !!}
			</div>

			<div class="form-group">
				{!! Form::label('email', 'E-Mail' ) !!}
				{!! Form::email('email', $user->email, ['class' => 'form-control', 'placeholder' => 'Ingrese Su E-Mail', 'required']) !!}
			</div>

			<div class="form-group">
				{!! Form::label('type', 'Tipo' ) !!}
				{!! Form::select('type', ['member' => 'Miembro', 'admin' => 'Administrador'], $user->type,['class' => 'form-control']) !!}
			</div>

			<div class="form-group">
				{!! Form::submit('Editar Usuario', ['class' => 'btn btn-primary']) !!}</div>
			</div>
		{!! Form::close() !!}
	  </div>
@endsection