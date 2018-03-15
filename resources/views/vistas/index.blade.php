@extends('admin.template.vista')
@section('title', 'Home')
@section('content')
<div class="navbar-color"></div>
	<div class="container margin-top">
		<div class="row">
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			  <!-- Indicators -->
			  <ol class="carousel-indicators">
			    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
			  </ol>

			  <!-- Wrapper for slides -->
			  <div class="carousel-inner" role="listbox">
			    <div class="item active">
			      <img src="http://placehold.it/1170x500&amp;text=Promoted Article" alt="...">
			      <div class="carousel-caption">
			        ...
			      </div>
			    </div>
			    <div class="item">
			      <img src="http://placehold.it/1170x500&amp;text=Promoted Article" alt="...">
			      <div class="carousel-caption">
			        ...
			      </div>
			    </div>
			  </div>

			  <!-- Controls -->
			  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div>
		</div>
	</div>

	<div class="menu-2">
		<div class="container-fluid">
			<ul class="nav nav-pills nav-justified">
				@foreach($categories as $category)
					<li><a class="hover" href="{{ route('vistas.search.category', $category->name) }}">{{ $category->name }}</a></li>
				@endforeach
			</ul>
		</StvnJvr>
	</div>

	<section class="container">
		<div class="row">
			<div class="col-md-8">
				<p><img class="img-responsive" src="http://placehold.it/760x380&amp;text=Promoted Article" alt="main article image"></p>
			</div>
			<div class="col-md-4">
				<p><img class="img-responsive" src="http://placehold.it/370x190&amp;text=otros Article" alt="company logo"></p>
				<p><img class="img-responsive" src="http://placehold.it/370x190&amp;text=otros Article" alt="company logo"></p>
			</div>
		</div>
	</section>

	<section class="container">
		<hr>
			<h1 class="text-center">ÚLTIMAS NOTICIAS</h1>
		<hr>
		<div class="row">
			<div class="col-lg-9" style="border-right: 1px solid #E3E5E8;">
			{{-- Articulos --}}
			<article>
				@foreach($articles as $article)
					<div class="row">
					@foreach($article->images as $image)
						<div class="col-lg-6">
							<p><img class="img-thumbnail img-responsive" src="/images/articles/{{ $image->name }}" alt="image for article" alt="article preview image"></p>
						</div>
					@endforeach
						<div class="text-center col-lg-6">
							<h2 class="text-pe"><a href="{{ route('vistas.view.article', $article->slug) }}">{{ $article->title }}</a></h2>
							<p>
								<span><i class="icon user">By {{ $article->user->name }} &nbsp;&nbsp;</i></span>
								<span><i class="icon clock-o"> {{ $article->created_at->diffForHumans() }} &nbsp;&nbsp;</i></span>
								<span><i class="icon book"> <a style="color:#333;" href="{{ route('vistas.search.category', $article->category->name) }}">{{ $article->category->name }}</a></i></span>
							</p>
							<p>{!! $article->content; !!}</p>
						</div>
					</div>
					<hr>
				@endforeach
				<div class="text-center">
					{!! $articles->render() !!}
				</div>
			</article>
			</div>
			<!-- Category -->
			<div class="row">
				@include('admin.template.partials.aside')
			</div>
		</div>
	</section>
@endsection