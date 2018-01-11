@extends('layouts.app')

@section('content')
<div class="panel panel-default">
	<div class="panel-heading">About Settings</div>

	<div class="panel-body">
		<form action="{{ route('aboutsetting.update') }}" method="POST" enctype="multipart/form-data">				
			{{ csrf_field() }}
			<div class="form-group">
				<label for="featured">Featured: </label>
				<input type="file" name="featured" class="form-control">		
			</div>
			
			<div class="form-group">
				<label for="content">content: </label>
				<textarea name="content" id="summernote" cols="5" rows="5" class="form-control">{{ $aboutsetting->content }}</textarea>	
			</div>
			
			<div class="form-group">
				<label for="vision">Vision content: </label>
				<textarea name="vision" id="summernote" cols="5" rows="5" class="form-control">{{ $aboutsetting->vision }}</textarea>	
			</div>
			
			<div class="text-center">
				<button class="btn btn-success" type="submit" >Update Changes</button>
			</div>
		</form>
	</div>
</div>

@endsection