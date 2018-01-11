
<div class="row">
	<div class="box">
		<div class="col-lg-12">
			<hr>
			<h2 class="intro-text text-center">Contact <strong>form</strong></h2>
			<hr>
			<p>This contact form uses laravel mail helper to automatically notify users</p>
			
			<form action="{{ route('contact.store')}}" method="POST">
				{{ csrf_field() }}
				<div class="row">
					<div class="form-group col-lg-4">
						<label for="name">Name</label>
						<input type="text" name="name" class="form-control">
					</div>
					
					<div class="form-group col-lg-4">
						<label for="email">Email Address</label>
						<input type="email" name="email" class="form-control">
					</div>
					
					<div class="form-group col-lg-4">
						<label for="phone">Phone Number</label>
						<input type="text" name="phone" class="form-control">
					</div>
					
					<div class="clearfix"></div>
					
					<div class="form-group col-lg-12">
						<label>Message</label>
						<textarea name="message" id="message" class="form-control" rows="6"></textarea>
					</div>
					
					<div class="form-group col-lg-12">
						<button type="submit" class="btn btn-default">Submit</button>
					</div>
					
				</div>
			</form>
		</div>
	</div>
</div>
