@extends('admin.template.main')
@section('title', 'Agregar categoria')
@section('title-panel', 'Agregar categoria')
@section('content')
	{!! Form::open(['route' => 'admin.categories.store', 'method' => 'POST']) !!}
			
		<div class="form-group">
			<label for="name">Nombre</label>
			<input type="text" id="name" name="name" class="form-control" placeholder="Nombre de la categoria">
		</div>

		<div class="form-group">
			<button type="submit" class="btn btn-primary">Registrar</button>
		</div>
	{!! Form::close() !!}
@endsection