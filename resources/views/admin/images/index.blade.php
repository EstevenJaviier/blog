@extends('admin.template.main')
@section('title', 'Listado de imagenes')
@section('title-panel', 'Listado de imagenes')
@section('content')
	<div class="row">
		@foreach($images as $image)
			<div class="col-md-4">
				<div class="panel panel-default">
				  <div class="panel-heading">
				    <h3 class="panel-title">{{ $image->article->title }}</h3>
				  </div>
				  <div class="panel-body">
				    <img src="/images/articles/{{ $image->name}}" class="img-responsive" alt="{{ $image->name}}">
				  </div>
				</div>
			</div>
		@endforeach
	</div>
@endsection