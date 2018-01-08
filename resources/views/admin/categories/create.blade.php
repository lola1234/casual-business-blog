@extends('layouts.app')



@section('content')

<div class="panel panel-default">
	<div class="panel-heading">Create a new Category</div>
	
	<div class="panel-body">
		<form action="{{ route('categories.store') }}" method="POST">
					{{ csrf_field() }}
			<div class="form-group">
				<label for="name">Name</label>
				<input type="text" name="name" class="form-control">
			</div>
		
			
			<div class="text-center">
				<button type="submit"  class="btn btn-success">Create</button>
			</div>
		</form>	
	</div>
</div>

@endsection