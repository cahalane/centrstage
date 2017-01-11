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

Route::get('/', 'PagesController@homepage');
Route::get('about', 'PagesController@about');
Route::get('how-it-works', 'PagesController@howItWorks');
Route::get('host-a-stream', 'PagesController@hostAStream');
Route::get('signup', 'PagesController@signup');

Route::resource('streams', 'StreamsController');

Route::post('purchases', 'PurchasesController@store');