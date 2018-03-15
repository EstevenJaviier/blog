@extends('admin.template.main')
@section('title')
	Semillero IN |
@endsection
@section('content')

	{!! Form::open(array('url' => 'foo/bar')) !!}
		{!! Form::label('password', 'E-Mail Address', array('class' => 'awesome')); !!}
		{!! Form::password('password', array('class' => 'form-control')); !!}
	{!! Form::close() !!}
	
	<div class="container">
		<h1>Hola Mundo Esteven Javiier</h1>
		<br>
		<h2>{{ $article->title }}</h2>
		<hr>
		{{ $article->content }}
		<hr>
		{{ $article->user->name }} | {{ $article->category->name }}

	</div>
@endsection