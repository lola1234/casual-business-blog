<?php

namespace App\Http\Controllers;

use App\Post;
use App\Category;
use App\HomeSetting;
use App\AboutSetting;
use App\Setting;
use Paginate;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
   
	public function index(){
		return view('welcome', ['homesetting' =>HomeSetting::first(),
								'setting' =>Setting::first() ]);
	}
	
	public function about(){
		return view('frontend.about', ['aboutsetting' =>AboutSetting::first(),
										'setting' =>Setting::first(),
										'image' =>HomeSetting::first()->carousel2 ]);
	}
	
	public function contact(){
		return view('frontend.contact', ['setting' =>Setting::first() ]);
	}
	
	public function blog(){
		return view('frontend.blog', ['posts' =>Post::paginate(3),
									 'setting' =>Setting::first()]);
	}
	
	public function show($slug){
		
		return view('frontend.showPost', ['post'=>Post::where('slug',$slug)->first(),
														'setting' =>Setting::first()]);
	}
	
}
