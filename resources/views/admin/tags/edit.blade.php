@extends('admin.template.main')
@section('title', 'Editar el Tag ' . $tag->name)
@section('title-panel', 'Editar El Tag  ' . $tag->name)
@section('content')
	{!! Form::open(['route' => ['admin.tags.update', $tag], 'method' => 'PUT']) !!}
			<div class="form-group">
				<label for="name">Nombre</label>
				<input type="text" class="form-control" name="name" value="{!! $tag->name !!}" required>
			</div>
		<div class="form-group">
			{!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
		</div>
	{!! Form::close() !!}
@endsection