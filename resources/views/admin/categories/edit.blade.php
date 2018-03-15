@extends('admin.template.main')
@section('title', 'Editar La Categoria | ')
@section('title-panel', 'Editar La Categoria ')
@section('content')
	{!! Form::open(['route' => ['admin.categories.update', $category], 'method' => 'PUT']) !!}
		<div class="form-group">
			<label for="name">Nombre</label>
			<input type="text" id="name" name="name" class="form-control" value="{!! $category->name !!}">
		</div>

		<div class="form-group">
			<button type="submit" class="btn btn-primary">Editar</button>
		</div>
	{!! Form::close() !!}
@endsection