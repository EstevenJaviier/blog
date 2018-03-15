@extends('admin.template.main')
@section('title', 'Listado de articulos')
@section('title-panel', 'Listado de articulos')
@section('content')
	<div class="form-group">
		<a href="{{ route('admin.articles.create') }}" class="btn btn-info">Registrar un nuevo Producto</a>
	{{-- Buscador De Articulos --}}

	<div class="form-group">
		{!! Form::open(['route' => 'admin.articles.index', 'method' => 'GET']) !!}
			<div class="inp-top input-group col-lg-3 pull-right">
				<input type="text" name="title" class="form-control" placeholder="Buscar Article">
				<span class="input-group-btn">
				{!! Form::submit('Go¡', ['class' => 'btn btn-default']) !!}
			</div>
		{!! Form::close() !!}
	</div>
	{{-- End Buscador De Articulos --}}
	</div>
	<table class="table table table-striped table-hover">
		<tr class="active">
			<th>ID</th>
			<th>Titulo</th>
			<th>Categoria</th>
			<th>User</th>
			<th>Accíon</th>
		</tr>
		@foreach($articles as $article)
	  	<tr>
	  		<td>{{ $article->id }}</td>
	  		<td>{{ $article->title }}</td>
	  		<td>{{ $article->category->name }}</td>
	  		<td>{{ $article->user->name }}</td>
	  		<td><a href="{{ route('admin.articles.edit', $article->id) }}" class="btn-sm btn btn-warning"><span class="glyphicon glyphicon-wrench"></span></a>
	  			<a href="{{ route('admin.articles.destroy', $article->id) }}" onclick="return confirm('Seguro que deseas eliminarlo¡')" class="btn-sm btn btn-danger"><span class="glyphicon glyphicon-remove-circle"></span></a>
	  		</td>
	  	</tr>
		@endforeach
	</table>

	<div class="text-center">
		{!! $articles->render() !!}
	</div>
@endsection