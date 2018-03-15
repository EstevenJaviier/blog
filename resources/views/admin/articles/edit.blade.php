@extends('admin.template.main')
@section('title', 'Editar el Articulo - ' . $article->title)
@section('title-panel', 'Editar el Articulo - ' . $article->title)
@section('content')
	{!! Form::open(['route' => ['admin.articles.update', $article], 'method' => 'PUT']) !!}
			<div class="for-group">
				<label for="title">Titulo</label>
				<input type="text" id="title" name="title" class="form-control" value="{{ $article->title }}">
			</div>

			<div class="form-group">
				{!! Form::label('category_id', 'Categoria' ) !!}
				{!! Form::select('category_id', $categories, $article->category->id, ['class' => 'form-control select-category']); !!}
			</div>

			<div class="form-group">
				{!! Form::label('content', 'Contenido' ) !!}
				{!! Form::textarea('content', $article->content,['class' => 'form-control', 'id' => 'editor']) !!}
			</div>

			<div class="form-group">
				{!! Form::label('tags', 'Tags' ) !!}
				{!! Form::select('tags[]', $tags, $my_tags, ['class' => 'form-control select-tag', 'multiple']) !!}
			</div>

			<div class="form-group">
				{!! Form::submit('Actualizar articulo', ['class' => 'btn btn-success']) !!}
			</div>
	{!! Form::close() !!}
@endsection