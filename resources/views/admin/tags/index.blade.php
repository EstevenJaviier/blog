@extends('admin.template.main')
@section('title', 'Listado De Tag')
@section('title-panel', 'Listado De Tag')
@section('content')
	<div class="form-group">
		<a href="{{ route('admin.tags.create') }}" class="btn btn-info">Registrar un nuevo tag</a>
	{{-- Buscador De Tags --}}
	<div class="form-group">
		{!! Form::open(['route' => 'admin.tags.index', 'method' => 'GET']) !!}
			<div class="inp-top input-group col-lg-3 pull-right">
				<input type="text" name="name" class="form-control" placeholder="Buscar Tag">
				<span class="input-group-btn">
				{!! Form::submit('Go¡', ['class' => 'btn btn-default']) !!}
			</div>
		{!! Form::close() !!}
	</div>
	{{-- End Buscador De Tags --}}
	<table class="table table table-striped table-hover">
		<tr class="active">
			<th>ID</th>
			<th>Nombre</th>
			<th>Accíon</th>
		</tr>
		@foreach($tags as $tag)
	  	<tr>
	  		<td>{{ $tag->id }}</td>
	  		<td>{{ $tag->name }}</td>
	  		<td><a href="{{ route('admin.tags.edit', $tag->id) }}" class="btn-sm btn btn-warning"><span class="glyphicon glyphicon-wrench"></span></a>
	  			<a href="{{ route('admin.tags.destroy', $tag->id) }}" onclick="return confirm('Seguro que deseas eliminarlo¡')" class="btn-sm btn btn-danger"><span class="glyphicon glyphicon-remove-circle"></span></a>
	  		</td>
	  	</tr>
		@endforeach
	</table>
	<div class="text-center">
		{!! $tags->render() !!}
	</div>
@endsection