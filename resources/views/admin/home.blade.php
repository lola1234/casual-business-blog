@extends('layouts.app')

@section('content')


<div class="text-center"><h2>Dashboard</h2></div>

<hr>
<hr>
<div class="col-lg-12">
	<div class="panel panel-info">
		<div class="panel-heading text-center">Quick Menu</div>		
		
		<div class="body">
		    <div class="list-group-item text-center">
				<li><a href="{{ route('posts.create' )}}">New Post</a></li>
				<li><a href="{{ route('categories.create' )}}">New Category </a></li>
				<li><a href="{{ route('contacts' )}}">All Contacts </a></li>
			</div>
		</div>
	</div>
</div>
<br>
<br>
<hr>
<hr>
<div class="col-lg-4">
	<div class="panel panel-info">
		<div class="panel-heading text-center">Published Post</div>		
		
		<div class="body">
			<h1 class="text-center">{{ $posts->count() }}</h1>		
		</div>
	</div>
</div>

<div class="col-lg-4">
	<div class="panel panel-success">
		<div class="panel-heading text-center">Category Count</div>		
		
		<div class="body">
			<h1 class="text-center">{{ $category->count() }}</h1>		
		</div>
	</div>
</div>

<div class="col-lg-4">
	<div class="panel panel-success">
		<div class="panel-heading text-center">Contact</div>		
		
		<div class="body">
			<h1 class="text-center">{{ $contact->count() }}</h1>		
		</div>
	</div>
</div>

      
@endsection
