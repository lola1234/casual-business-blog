@extends('layouts.app')


@section('content')

<div class="panel panel-default">
	<div class="panel-heading">Site Settings</div>
	
	<div class="panel-body">
		<form action="{{ route('setting.update') }}" method="POST">
				{{ csrf_field() }}
			<div class="form-group">
				<label for="site_name">Site Name: </label>
				<input type="text" name="site_name" value="{{ $settings->site_name }}" class="form-control">		
			</div>
			
			<div class="form-group">
				<label for="location">Address: </label>
				<input type="text" name="location" value="{{ $settings->location }}" class="form-control">		
			</div>
			
			<div class="form-group">
				<label for="email">Email: </label>
				<input type="email" name="email" value="{{ $settings->email }}" class="form-control">		
			</div>
			
			<div class="form-group">
				<label for="contact">Contact: </label>
				<input type="text" name="contact" value="{{ $settings->contact }}" class="form-control">		
			</div>
			
			<div class="text-center">
				<button class="btn btn-success" type="submit" >Update Changes</button>
			</div>
		</form>
	</div>
</div>

@endsection