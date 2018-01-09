<?php

use Illuminate\Database\Seeder;
use App\HomeSetting;

class HomeSettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        HomeSetting::create([
			'carousel1'=>'/uploads/images/slide1.jpg',
			'carousel2'=>'/uploads/images/slide2.jpg',
			'carousel3'=>'/uploads/images/slide3.jpg',
			'first_title' =>'Title one',
			'first_content'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua',
			'second_title' =>'Title two',
			'second_content' =>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua'
		]);
    }
}
