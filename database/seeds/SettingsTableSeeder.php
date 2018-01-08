<?php

use Illuminate\Database\Seeder;
use App\Setting;
class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([
        	
        	'contact' => '005556622',
        	'location' => 'Some where Earth, California',
        	'site_name' => 'Something Blog',
        	'email' => 'earthblog@gmail.com'
        ]);
    }
}
