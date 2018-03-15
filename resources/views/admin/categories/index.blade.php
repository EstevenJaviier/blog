@extends('admin.template.main')
@section('title', 'Lista De Categorias')
@section('title-panel', 'Listado De Categorias')
@section('content')
	<div class="form-group">
		<a href="{{ route('admin.categories.create') }}" class="btn btn-info">Registrar nueva categoria</a>
	</div>
	<table class="table table table-striped table-hover">
		<tr class="active">
			<th>ID</th>
			<th>Nombre</th>
			<th>Accíon</th>
		</tr>
		@foreach($categories as $category)
	  	<tr>
	  		<td>{{ $category->id }}</td>
	  		<td>{{ $category->name }}</td>
	  		<td><a href="{{ route('admin.categories.edit', $category->id) }}" class="btn-sm btn btn-warning"><span class="glyphicon glyphicon-wrench"></span></a>
	  			<a href="{{ route('admin.categories.destroy', $category->id) }}" onclick="return confirm('Seguro que deseas eliminarlo¡')" class="btn-sm btn btn-danger"><span class="glyphicon glyphicon-remove-circle"></span></a>
	  		</td>
	  	</tr>
		@endforeach
	</table>
	<div class="text-center">
		{!! $categories->render() !!}
	</div>
@endsection