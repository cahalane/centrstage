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

// Route::group(['domain' => env('APP_URL')], function () {
	Route::get('/', 'PagesController@homepage');
	Route::get('about', 'PagesController@about');
	Route::get('how-it-works', 'PagesController@howItWorks');
	Route::get('contact', 'PagesController@contact');
	Route::get('signup', 'Auth\RegisterController@showRegistrationForm');

	Route::resource('streams', 'StreamsController');

	Route::post('purchases', 'PurchasesController@store');

	Route::post('contact', 'ContactController@mail');

 	Route::get('admin', 'AdminController@home');

	Route::get('live', function () {
		return redirect('https://livestream.com/centrstage');
	});
// });

// Route::group(['domain' => 'admin.'.env('APP_URL')], function () {
// 	Route::get('/', 'AdminController@home');

// 	Route::get('signups', 'SignupsController@index');
// });
Auth::routes();