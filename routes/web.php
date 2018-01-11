<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'FrontEndController@index');
Route::get('/about', 'FrontEndController@about');
Route::get('/contact', 'FrontEndController@contact');
Route::get('/blog', 'FrontEndController@blog');
Route::get('/blog/{slug}', 'FrontEndController@show')->name('post.show');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/settings/contacts', 'ContactController@index')->name('contacts');
Route::delete('/settings/contact/{id}', 'ContactController@destroy')->name('contact.destroy');
Route::post('/settings/contact', 'ContactController@store')->name('contact.store');

Route::get('/settings', 'SettingController@index')->name('setting');
Route::post('/settings', 'SettingController@update')->name('setting.update');

Route::get('/settings/about', 'AboutSettingController@index')->name('aboutsetting');
Route::post('/settings/about', 'AboutSettingController@update')->name('aboutsetting.update');

Route::get('/settings/home', 'HomeSettingController@index')->name('homesetting');
Route::post('/settings/home', 'HomeSettingController@update')->name('homesetting.update');

Route::get('/posts/bin', 'PostController@bin')->name('posts.bin');
Route::get('/posts/restore/{id}', 'PostController@restore')->name('posts.restore');
Route::get('/posts/kill/{id}', 'PostController@kill')->name('posts.kill');

Route::resources
	([
		'posts' => 'PostController',
		'categories' => 'CategoryController'
	]);

Route::get('/posts/{slug}/edit', 'PostController@edit')->name('posts.edit');