<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Contact - Business Casual Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('app/css/bootstrap.css') }}" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="{{ asset('app/css/business-casual.css') }}" rel="stylesheet">
</head>

<body>

@include('frontend.nav')

	<div class="container">
		<div class="row">
			<div class="box">
				@yield('content')	
			</div>
		</div>
	</div>
	

<footer>
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<p>Copyright &copy; Company 2013</p>
			</div>			
		</div>
	</div>
</footer>

<script src="{{ asset('app/js/jquery-1.10.2.js') }}"></script>
<script src="{{ asset('app/js/bootstrap.js') }}"></script>
<script>
	// Activates the Carousel
	$('.carousel').carousel({
		interval: 5000
	})
</script>

</body>
</html>
