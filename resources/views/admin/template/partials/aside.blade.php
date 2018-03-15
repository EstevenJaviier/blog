<h3 class="text-left">&nbsp;<span class="icon book"></span> Categorias <span class="badge">{{ $category->count() }}</span></h3>
<div class="col-md-3">
	<ul class="nav nav-list">
		@foreach($categories as $category)
            <li><a href="{{ route('vistas.search.category', $category->name) }}"><i class="icon caret-right"></i> {{ $category->name }} &#160;<span class="label label-danger">{{ $category->articles->count() }}</span></a></li>
        @endforeach
    	<a href="" style="margin-top: 1em;" class="btn btn-primary">Ver mas..</a>
    </ul>
</div><!-- End Category -->


<!-- Tags -->
<div class="text-left col-md-3">
@foreach($tags as $tag)
@endforeach
<h3 class="text-left">&nbsp;&nbsp;<span class="icon tags"></span> Tags <span class="badge">{{ $tag->count() }}</span></h3>
	@foreach($tags as $tag)
		<a href="{{ route('vistas.search.tag', $tag->name) }}"><span class="label label-primary">{{ $tag->name }}</span></a>
	@endforeach
	<br>
</div><!-- End Tags -->

<!-- Fotos recientes -->
<div class="col-md-3 text-center">
	<h3 class="text-left"><span class="icon image"></span> Fotos Recientes <span class="badge">{{ $image->count() }}</span></h3>
	@foreach($images as $image)
		<img src="/images/articles/{{ $image->name}}" alt="..." class="img-responsive img-thumbnail">
	@endforeach
</div><!-- End Fotos recientes -->