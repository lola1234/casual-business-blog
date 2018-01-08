@extends('layouts.app')



@section('content')

<div class="panel panel-default">
	<div class="panel-heading">Category : {{ $category->name }}</div>
	
	<div class="panel-body">
		<form action="{{ route('categories.update', ['id' => $category->id] )}}" method="POST">
					{{ csrf_field() }}
					{{ method_field('PUT') }}
			<div class="form-group">
				<label for="name">Name</label>
				<input type="text" name="name" value="{{ $category->name }}" class="form-control">
			</div>		
			
			<div class="text-center">
				<button type="submit"  class="btn btn-success">Update</button>
			</div>
		</form>	
	</div>
</div>

@endsection