
@extends('frontend.master')


@section('content')

<div class="row">
    <div class="box">
		<div class="col-lg-12">
			<hr>
			<h2 class="intro-text text-center"><strong>Blog</strong>
			</h2>
			<hr>
		</div>
		
		@if($posts->count() >0 )
			@foreach($posts as $post)
				<div class="col-lg-12 text-center">
					<img class="img-responsive img-border img-full" src="{{ $post->featured }}" alt="">
					<h2>{{ $post->title }}
						<br>
						<small>{{ $post->created_at->diffForHumans() }}</small>
					</h2>
					<p> {{ str_limit($post->content, 50) }}</p>
					<a href="{{ route('post.show', ['slug'=>$post->slug])}}" class="btn btn-default btn-lg">Read More</a>
					<hr>
				</div>
			@endforeach
		@else
			<h1><strong> No Post Published yet <br> Come back later :) </strong></h1>
		@endif
		
	</div>
</div>

<div class="col-lg-12 text-center">
	<ul class="pager">
	    
		@if($posts->hasMorePages())
			<li class="previous"><a href="{{ $posts->nextPageUrl() }}">&larr; Older</a></li>
		@else
			<li class="next"><a href="{{ $posts->previousPageUrl() }}">Newer &rarr;</a></li>
		@endif
	</ul>
</div>




@endsection