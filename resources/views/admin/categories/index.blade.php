@extends('layouts.app')



@section('content')

<div class="panel panel-default">
	<div class="panel-heading">Posts</div>
	
	<div class="panel-body">
		<table class="table table-hover">
			<thead>
				<th>Name</th>
				<th>Edit</th>
				<th>Delete</th>		
			</thead>
			
			<tbody>
				
				@if($categories->count() > 0)
					@foreach($categories as $category)
						<tr>
							<td> {{ $category->name }}</td>
							<td>
								<a href="{{ route('categories.edit', ['id' =>$category->id] )}}" class="btn btn-success">Edit</a>
							</td>
							<td> 
		
								<form action="{{ route('categories.destroy', ['id' =>$category->id] )}}"  method="POST">
									{{ csrf_field() }}
									{{ method_field('DELETE') }}
									 <button class="btn btn-danger" type="Submit">Delete</btton>
								</form>
								
							</td>
						</tr>
					@endforeach
				@else
					<tr> 
						<th colspan="5" class="text-center">No Published Categories</th>
					</tr>
				@endif			
			</tbody>
		</table>
	</div>
</div>
@endsection