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

Route::get('/', 'HomeController@index')->name('home');

Auth::routes();

Route::get('login', [ 'as' => 'login', 'uses' => 'AdminController@index']);

Route::group(['prefix' => 'admin'], function() {
	Route::get('login', 'AdminController@index')->name('Admin Login');
	Route::get('home', 'AdminController@home')->name('Admin Home')->middleware('auth');
	Route::get('mps', 'AdminController@mps')->name('Admin Home');
	Route::get('upload-members', 'AdminController@uploadMembers')->name('Admin Home');
	Route::post('ImportMembers', 'AdminController@importMembers')->name('Admin Home');
	Route::post('upload-members-images', 'AdminController@uploadMembersImages')->name('Admin Home');

	Route::get('sliders', 'ImagesController@sliders')->name('Slider Home');
	Route::get('logo', 'ImagesController@logo')->name('Logo Home');

	
	Route::get('upload-logo', 'ImagesController@uploadLogo')->name('Logo Home');
	Route::post('upload-logo', 'ImagesController@uploadLogoData')->name('Admin Home');

	Route::get('logo-activate/{id}', 'ImagesController@logoActivate')->name('Logo Home');
	Route::get('logo-edit/{id}', 'ImagesController@sliderEdit')->name('Logo Home');
	Route::get('logo-delete/{id}', 'ImagesController@logoDelete')->name('Logo Home');
	Route::get('logo-deactivate/{id}', 'ImagesController@logoDeactivate')->name('Logo Home');


	Route::get('upload-slider', 'ImagesController@uploadSlider')->name('Logo Home');
	Route::post('upload-slider', 'ImagesController@uploadSliderData')->name('Admin Home');

	Route::get('slider-deactivate/{id}', 'ImagesController@sliderDeactivate')->name('Logo Home');
	Route::get('slider-activate/{id}', 'ImagesController@sliderActivate')->name('Logo Home');
	Route::get('slider-edit/{id}', 'ImagesController@sliderEdit')->name('Logo Home');
	Route::get('slider-delete/{id}', 'ImagesController@sliderDelete')->name('Logo Home');	
});

Route::get('/home', 'HomeController@index')->name('home');
