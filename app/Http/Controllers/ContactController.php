<?php

namespace App\Http\Controllers;

use App\Mail\ContactQuery;
use App\Contact;
use Paginate;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{	
	public function index(){
		return view('admin.settings.contactshow', ['contacts'=>Contact::paginate(10)] );
	}
	
    public function store(){
		$this->validate(request(),[
			'name' => 'required',
			'email' => 'required',
			'message' => 'required'	,
			'phone' => 'required'
		]);
				
		$contact = Contact::create([
			'name' => request()->name,
			'email' => request()->email,
			'phone' => request()->phone,
			'message' => request()->message		
		]);
		
		Mail::to(request()->email)->send(new ContactQuery($contact));			  
		return redirect('/');
	}
	
	public function destroy($id){
		$contact=Contact::find($id);
		$contact->delete();
		
		Session::flash('success', 'Contact Deleted');
		return redirect()->route('contacts');
	}
	
}
