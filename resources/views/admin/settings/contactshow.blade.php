@extends('layouts.app')



@section('content')

<div class="panel panel-default">
	<div class="panel-heading">Contacts</div>
	
	<div class="panel-body">
		<table class="table table-hover">
			<thead>
				<th>Name</th>
				<th>Email</th>
				<th>Phone</th>
				<th>Delete</th>				
			</thead>
			
			<tbody>
				@if($contacts->count() > 0)
					@foreach($contacts as $contact)
						<tr>							
							<td> {{ $contact->name }}</td> 
							<td> {{ $contact->email }}</td>
							<td> {{ $contact->phone }}</td>
							<td>
								<form action="{{ route('contact.destroy', ['id' =>$contact->id] )}}"  method="POST">
									{{ csrf_field() }}
									{{ method_field('DELETE') }}
									 <button class="btn btn-danger" type="Submit">Delete</btton>
								</form>								
							</td>
						</tr>
					@endforeach
				@else
					<tr> 
						<th colspan="5" class="text-center">No Contacts</th>
					</tr>
				@endif						
			</tbody>
		</table>
	</div>
		<div class="text-center">{{ $contacts->links() }}</div>
</div>
@endsection