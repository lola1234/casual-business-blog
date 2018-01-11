@extends('layouts.app')


@section('content')

<div class="panel panel-default">
	<div class="panel-heading">Home Settings</div>
	
	<div class="panel-body">
		<form action="{{ route('homesetting.update') }}" method="POST" enctype="multipart/form-data">
				{{ csrf_field() }}
			<div class="form-group">
				<label for="carousel1">Carousel 1: </label>
				<input type="file" name="carousel1" value="{{ $homesetting->carousel1 }}" class="form-control">		
			</div>
			<div class="form-group">
				<label for="carousel2">Carousel 2: </label>
				<input type="file" name="carousel2" value="{{ $homesetting->carousel2 }}" class="form-control">		
			</div>
			<div class="form-group">
				<label for="carousel3">Carousel 3: </label>
				<input type="file" name="carousel3" value="{{ $homesetting->carousel3 }}" class="form-control">		
			</div>
			
			
			<div class="form-group">
				<label for="first_title">Title Box 1: </label>
				<input type="text" name="first_title" value="{{ $homesetting->first_title }}" class="form-control">		
			</div>
			<div class="form-group">
				<label for="first_content">Content 1: </label>
				<textarea name="first_content" id="summernote" rows="7" cols="7" class="form-control">{{ $homesetting->first_content }}</textarea>	
			</div>
			
			<div class="form-group">
				<label for="second_title">Title Box 2: </label>
				<input type="text" name="second_title" value="{{ $homesetting->second_title }}" class="form-control">		
			</div>
			<div class="form-group">
				<label for="second_content">Content 2: </label>
				<textarea name="second_content" id="summernote" rows="7" cols="7" class="form-control">{{ $homesetting->second_content }}</textarea>	
			</div>
			
			<div class="text-center">
				<button class="btn btn-success" type="submit" >Update Changes</button>
			</div>
		</form>
	</div>
</div>

@endsection