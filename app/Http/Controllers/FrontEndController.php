<?php

namespace App\Http\Controllers;

use App\HomeSetting;
use App\AboutSetting;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index(){
		return view('welcome', ['homesetting' =>HomeSetting::first() ]);
	}
	
	public function about(){
		return view('frontend.about', ['aboutsetting' =>AboutSetting::first() ]);
	}
}
