
@extends('frontend.master')


@section('content')
<div class=""row">
	<div class="box">
		<div class="col-lg-12 text-center">
			<img class="img-responsive img-border img-full" src="{{ $post->featured }}" alt="">
			<h2>{{ $post->title }}
			<br>			
				<small>{{ $post->created_at->diffForHumans() }}</small>
			<br>
			<br>
			</h2>
			<p> {{ $post->content }}</p>
					
			
		</div>
	</div>
</div>

@endsection