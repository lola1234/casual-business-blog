@extends('layouts.app')



@section('content')

<div class="panel panel-default">
	<div class="panel-heading">Posts</div>
	
	<div class="panel-body">
		<table class="table table-hover">
			<thead>
				<th>Image</th>
				<th>Title</th>
				<th>Edit</th>
				<th>Bin</th>		
			</thead>
			
			<tbody>
				@if($posts->count() > 0)
					@foreach($posts as $post)
						<tr>
							<td><img src="{{ ($post->featured) }}" alt=" " width="200px" height="100px"></td>
							<td><a href="{{ route('post.show', ['slug'=>$post->slug ]) }}">{{ $post->title }}</a></td>
							<td>
								<a href="{{ route('posts.edit', ['slug' =>$post->slug] )}}" class="btn btn-info">Edit</a>
							</td>
							<td> 
		
								<form action="{{ route('posts.destroy', ['id' =>$post->id] )}}"  method="POST">
									{{ csrf_field() }}
									{{ method_field('DELETE') }}
									 <button class="btn btn-danger" type="Submit">Delete</btton>
								</form>
								
							</td>
						</tr>
					@endforeach
				@else
					<tr> 
						<th colspan="5" class="text-center">No Publised Posts</th>
					</tr>
				@endif						
			</tbody>
		</table>
	</div>
			<div class="text-center">{{ $posts->links() }}</div>
</div>


@endsection