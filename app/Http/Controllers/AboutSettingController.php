<?php

namespace App\Http\Controllers;

use App\AboutSetting;
use Session;
use Illuminate\Http\Request;

class AboutSettingController extends Controller
{
   
	public function __construct(){
		$this->middleware('auth');
	}
	
   public function index(){
		return view('admin.settings.aboutSettings', ['aboutsetting' =>AboutSetting::first()]);
	}
	
	public function update(){
		$this->validate(request(), [

    		'content' => 'required',
			'vision' => 'required'
    	]);

    	$about = AboutSetting::first();
    	
		if(request()->hasFile('featured')){
			$image = $request->featured;
			$imageNewName = time().$image->getClientOriginalName();
			$image->move('uploads/images',$imageNewName);
			$about->featured = '/uploads/images/'.$imageNewName;
		}
    	$about->content = request()->content;
    	$about->vision = request()->vision;
		
    	$about->save();

    	Session::flash('success','settings updated');
    	return redirect()->back();

	}
}
