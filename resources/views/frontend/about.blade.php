
@extends('frontend.master')


@section('content')

	<div class="row">
		<div class="box">
			<div class="col-lg-12">
				<hr>
				<h2 class="intro-text text-center">About <strong>business casual</strong></h2>
				<hr>
			</div>

			<div class="col-md-6">
				<img class="img-responsive img-border-left" src="{{ $image }}" alt="">
			</div>

			<div class="col-md-6">
				<p>{{ $aboutsetting->content}}</p>
			</div>
			<div class="clearfix"></div>			
		</div>
	</div>

	<div class="row">
		<div class="box">
			<div class="col-lg-12">	
				<hr>
				<h2 class="intro-text text-center"><strong>Our VISION</strong></h2>
				<hr>
				<p>{{ $aboutsetting->vision }}</p>
			</div>
		</div>
	</div>
@endsection