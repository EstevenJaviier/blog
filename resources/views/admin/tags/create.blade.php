@extends('admin.template.main')
@section('title', 'Crear Tag')
@section('title-panel', 'Crear Nuevo Tag')
@section('content')
	{!! Form::open(['route' => 'admin.tags.store', 'method' => 'POST']) !!}
			<div class="form-group">
				<label for="name">Nombre</label>
				<input type="text" class="form-control" name="name" placeholder="Nombre del tag" required>
			</div>
		<div class="form-group">
			{!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
		</div>
	{!! Form::close() !!}
@endsection