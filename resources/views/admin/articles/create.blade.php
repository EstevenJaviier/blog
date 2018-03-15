@extends('admin.template.main')
@section('title', 'Agregar Articulo')
@section('title-panel', 'Agregar Articulo')
@section('content')
	{!! Form::open(['route' => 'admin.articles.store', 'method' => 'POST', 'files' => true]) !!}
			<div class="for-group">
				<label for="title">Titulo</label>
				<input type="text" id="title" name="title" class="form-control" placeholder="Titulo del articulo">
			</div>

			<div class="form-group">
				{!! Form::label('category_id', 'Categoria' ) !!}
				{!! Form::select('category_id', $categories, null, ['placeholder' => 'Seleccione una categoria', 'class' => 'form-control select-category']); !!}
			</div>

			<div class="form-group">
				{!! Form::label('content', 'Contenido' ) !!}
				{!! Form::textarea('content', null,['class' => 'form-control', 'id' => 'editor']) !!}
			</div>

			<div class="form-group">
				{!! Form::label('tags', 'Tags' ) !!}
				{!! Form::select('tags[]', $tags, null, ['class' => 'form-control select-tag', 'multiple']); !!}
			</div>

			<div class="form-group">
				{!! Form::label('image', 'Imagen' ) !!}
				{!! Form::file('image', ['id' => 'input-id', 'multiple']); !!}
			</div>

			<div class="form-group">
				{!! Form::submit('Agregar articulo', ['class' => 'btn btn-primary']) !!}
			</div>
	{!! Form::close() !!}
@endsection