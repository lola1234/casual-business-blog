<?php

namespace App\Http\Controllers;

use Session;
use App\HomeSetting;
use Illuminate\Http\Request;

class HomeSettingController extends Controller
{	
	
	public function __construct(){
		$this->middleware('auth');
	}
	
    public function index(){
		return view('admin.settings.homeSettings', ['homesetting' =>HomeSetting::first() ]);
	}
	
	public function update(){
		$this->validate(request(), [
    		'first_title' => 'required',
    		'first_content' => 'required',
    		'second_title' => 'required',
			'second_content' => 'required'
    	]);
		
		$home = HomeSetting::first();
		
		if(request()->hasFile('carousel1')){
			
			$carousel = $request->carousel1;
			$carouselNewName = time().$carousel->getClientOriginalName();
			$carousel->move('uploads/images',$carouselNewName);
			$home->carousel1 = '/uploads/images/'.$carouselNewName;
		}
		
		if(request()->hasFile('carousel2')){
			
			$carousel = $request->carousel2;
			$carouselNewName = time().$carousel->getClientOriginalName();
			$carousel->move('uploads/images',$carouselNewName);
			$home->carousel2 = '/uploads/images/'.$carouselNewName;
		}
		
		if(request()->hasFile('carousel3')){
			
			$carousel = $request->carousel3;
			$carouselNewName = time().$carousel->getClientOriginalName();
			$carousel->move('uploads/images',$carouselNewName);
			$home->carousel3 = '/uploads/images/'.$carouselNewName;
		}
		
		$home->first_title = request()->first_title;
		$home->first_content = request()->first_content;
		$home->second_title = request()->second_title;
		$home->second_content = request()->second_content;
		
		$home->save();
		Session::flash('success','settings updated');
		
    	return redirect()->back();				
	}
	
}
