@extends('frontend.master')

@section('header')
	<div class="brand">{{ $setting->site_name }}</div>
	<div class="address-bar">The Plaza | {{ $setting->address }} | {{ $setting->email}} | {{ $setting->phone }}</div>
@endsection

@section('content')
<div class="row">
	<div class="box">
	
		<div class="col-lg-12">
			<hr>
			<h2 class="intro-text text-center">Contact <strong>{{ $setting->site_name }}</strong></h2>
			<hr>
		</div>

		<div class="col-md-8">
			<!-- Embedded Google Map using an iframe - to select your location find it on Google maps and paste the link as the iframe src. If you want to use the Google Maps API instead then have at it! -->
			<iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?hl=en&amp;ie=UTF8&amp;ll=37.0625,-95.677068&amp;spn=56.506174,79.013672&amp;t=m&amp;z=4&amp;output=embed"></iframe>
		</div>
		
		<div class="col-md-4">
			<p>Phone: <strong>{{ $setting->contact }}</strong></p>
			<p>Email: <strong>{{ $setting->email }}</strong></p>
			<p>Address: <strong>{{ $setting->site_name }}<br>{{ $setting->location}}<br></strong></p>
		</div>
		<div class="clearfix"></div>
		
	</div>
</div>
    
	

	
	@include('frontend.contactform')


@endsection