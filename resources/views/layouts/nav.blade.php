

<nav class="navbar navbar-default navbar-static-top">
	<div class="container">
		<div class="navbar-header">

			<!-- Collapsed Hamburger -->
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
				<span class="sr-only">Toggle Navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>

			<!-- Branding Image -->
			<a class="navbar-brand" href="{{ url('/') }}">
				Casual
			</a>
		</div>
	   
		<div class="collapse navbar-collapse" id="app-navbar-collapse">
			<!-- Left Side Of Navbar -->
			<ul class="nav navbar-nav">			
				@auth
					
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" aria-haspopup="true">
							Settings <span class="caret"></span>
						</a>
						<ul class="dropdown-menu">						
							<li><a href="{{ route('homesetting') }}">Home</a></li>
							<li><a href="{{ route('aboutsetting') }}">About</a></li>
							<li><a href="{{ route('setting') }}">Contact</a></li>
						</ul>
					</li>
					
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" aria-haspopup="true">
							Posts <span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
							<li><a href="{{ route('posts.index') }}">Posts</a></li>
							<li><a href="{{ route('posts.create') }}">Create</a></li>
							<li><a href="{{ route('posts.bin') }}">Bin</a></li>
						</ul>
					</li>
					
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" aria-haspopup="true">
							Categories <span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
							<li><a href="{{ route('categories.index') }}">Categories</a></li>
							<li><a href="{{ route('categories.create') }}">Create</a></li>
						</ul>
					</li>				
					<li><a href="{{ route('contacts') }}">Contacts</a></li>
				@endauth
				
			</ul>
			
			
			<!-- Right Side Of Navbar -->
			<ul class="nav navbar-nav navbar-right">
				<!-- Authentication Links -->
				@guest
					<li><a href="{{ route('login') }}">Login</a></li>
					<li><a href="{{ route('register') }}">Register</a></li>
				@else
					<li><a href="{{ route('home') }}">Dashboard</a></li>
					
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
							{{ Auth::user()->name }} <span class="caret"></span>
						</a>

						<ul class="dropdown-menu">
							<li>
								<a href="{{ route('logout') }}"
									onclick="event.preventDefault();
											 document.getElementById('logout-form').submit();">
									Logout
								</a>

								<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
									{{ csrf_field() }}
								</form>
							</li>
						</ul>
					</li>
					
				@endguest
			</ul>
		</div>
	</div>
</nav>

