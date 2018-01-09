<?php

namespace App\Http\Controllers;

use App\Setting;
use Session;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function __construct(){
		$this->middleware('admin');
	}
	
	public function index(){
    	return view('admin.settings.contactsettings', ['settings' => Setting::first()]);
    }

    public function update(){

    	$this->validate(request(), [

    		'email' => 'required|email',
    		'site_name' => 'required',
    		'location' => 'required',
    		'contact' => 'required'

    	]);

    	$setting = Setting::first();
    	$setting->site_name = request()->site_name;
    	$setting->email = request()->email;
    	$setting->contact = request()->contact;
    	$setting->location = request()->location;
    	$setting->save();

    	Session::flash('success','settings updated');
    	return redirect()->back();

    }
}
