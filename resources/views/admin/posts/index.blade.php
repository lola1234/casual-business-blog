@extends('layouts.app')



@section('content')

<div class="panel panel-default">
	<div class="panel-header">Posts</div>
	
	<div class="panel-body">
		<table class="table table-hover">
			<thead>
				<th>Image</th>
				<th>Title</th>
				<th>Edit</th>
				<th>Bin</th>		
			</thead>
			
			<tbody>
				<tr>
					@if($posts->count() > 0)
						@foreach($posts as $post)
					
							<td><img src="{{ ($post->featured) }}" alt=" " width="200px" height="100px"></td>
							<td> {{ $post->title }}</td>
							<td>
								<a href="{{ route('posts.edit', ['id' =>$post->id] )}}" class="btn btn-success">Edit</a>
							</td>
							<td> 
		
								<form action="{{ route('posts.destroy', ['id' =>$post->id] )}}"  method="POST">
									{{ csrf_field() }}
									{{ method_field('DELETE') }}
								     <button class="btn btn-danger" type="Submit">Delete</btton>
								</form>
								
							</td>
					
						@endforeach
					@else
						<tr> 
							<th colspan="5" class="text-center">No Publised Posts</th>
						</tr>
					@endif			
				</tr>
			</tbody>
		</table>
	</div>
</div>
@endsection