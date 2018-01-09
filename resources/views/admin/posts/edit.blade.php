@extends('layouts.app')



@section('content')


<div class="panel panel-default">
	<div class="panel-heading">Edit Post: {{ $post->title }}</div>
		
		<div class="panel-body">
			<form action="{{ route('posts.update', ['id'=>$post->id] )}}" method="POST" enctype="multipart/form-data">
						{{ csrf_field() }}
						{{ method_field('PUT') }}
						
				<div class="form-group">
					<label for="title">Title</label>
					<input type="text" name="title" value="{{ $post->title }}" class="form-control">
				</div>
				
				<div class="form-group">
					<label for="featured">Image</label>
					<input type="file" name="featured" class="form-control">
				</div>
				
				<div class="form-group">
					<label for="content">Content</label>
					<textarea name="content" id="content" class="form-control">{{ $post->content }}</textarea>
				</div>
				
				<div class="form-group">
					<label for="category">Select a Category: </label>
					<select name="category_id" id="Category" cols="5" rows="5" class="form-control">
						@foreach($categories as $category)
							<option value="{{ $category->id}}"
								@if($post->category->id == $category->id)
									selected
								@endif
								>{{ $category->name }}
							</option>
						@endforeach
					</select>
				</div>
				
				<div class="text-center">
					<button type="submit"  class="btn btn-success">Update</button>
				</div>
			</form>	
		</div>
	</div>
</div>

@endsection