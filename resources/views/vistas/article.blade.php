@extends('admin.template.vista')
@section('title', 'Articulo | ' . $article->title)
@section('content')
<div class="navbar-color"></div>
<div class="container margin-top">
	<div class="row">
		<div class="col-md-4">
			<img class="img-responsive" src="http://placehold.it/370x183&amp;text=LOGO" alt="company logo">
		</div>
		<div class="col-md-8">
			<img class="img-responsive" src="http://placehold.it/900x211&amp;text=Banner" alt="company banner">
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
	</div>
</div>

<section class="container">
	<div class="row">
		<div class="col-lg-9" style="border-right: 1px solid #E3E5E8;">
		{{-- Articulo --}}
		<article>
			<h1>{{ $article->title }}</h1>
			<div class="row">
			@foreach($article->images as $image)
				<div class="col-md-12">
					<p><img style="width:100%;" class="img-thumbnail img-responsive" src="/images/articles/{{ $image->name }}" style="width: 100%;" alt="image for article" alt="article preview image"></p>
				</div>
			@endforeach
				<div class="col-md-12">
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
			<h2><span class="icon comment"></span> Comentarios</h2>
			<div id="disqus_thread"></div>
			<script>
			(function() { // DON'T EDIT BELOW THIS LINE
			var d = document, s = d.createElement('script');

			s.src = '//semillero-in.disqus.com/embed.js';

			s.setAttribute('data-timestamp', +new Date());
			(d.head || d.body).appendChild(s);
			})();
			</script>
			<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>
		</article>
		</div>
		<!-- Category -->
		<div class="row">
			@include('admin.template.partials.aside')
		</div>
	</div>
</section>
@endsection