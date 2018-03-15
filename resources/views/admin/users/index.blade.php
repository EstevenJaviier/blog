@extends('admin.template.main')
@section('title', 'Lista de usuarios')
@section('content')
@section('title-panel', 'Lista de usuarios')
	<div class="form-group">
		<a href="{{ route('admin.users.create') }}" class="btn btn-info">Registrar nuevo usuario</a>
	</div>
	<table class="table table table-striped table-hover">
		<tr class="active">
			<th>ID</th>
			<th>Nombre</th>
			<th>E-Mail</th>
			<th>Tipo</th>
			<th>Accíon</th>
		</tr>
		@foreach($users as $user)
	  	<tr>
	  		<td>{{ $user->id }}</td>
	  		<td>{{ $user->name }}</td>
	  		<td>{{ $user->email }}</td>
	  		<td>
	  			@if($user->type == "admin")
	  				<span class="label label-danger">{{ $user->type }}</span>
	  			@else
	  				<span class="label label-primary">{{ $user->type }}</span>
	  			@endif
	  			</td>
	  		<td><a href="{{ route('admin.users.edit', $user->id) }}" class="btn-sm btn btn-warning"><span class="glyphicon glyphicon-wrench"></span></a>
	  			<a href="{{ route('admin.users.destroy', $user->id) }}" onclick="return confirm('Seguro que deseas eliminarlo¡')" class="btn-sm btn btn-danger"><span class="glyphicon glyphicon-remove-circle"></span></a>
	  		</td>
	  	</tr>
		@endforeach
	</table>
	<div class="text-center">
		{!! $users->render() !!}
	</div>
@endsection