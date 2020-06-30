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
Route::get('/ladakh_itinerary', 'HomeController@ladakh_itinerary')->name('ladakh_itinerary');
Route::get('/goa_itinerary', 'HomeController@goa_itinerary')->name('goa_itinerary');
Route::get('/kasol_itinerary', 'HomeController@kasol_itinerary')->name('kasol_itinerary');
Route::get('/manali_itinerary', 'HomeController@manali_itinerary')->name('manali_itinerary');
Route::get('/kedarnath_itinerary', 'HomeController@kedarnath_itinerary')->name('kedarnath_itinerary');
Route::get('/mcleodganj_itinerary', 'HomeController@mcleodganj_itinerary')->name('mcleodganj_itinerary');

Route::post('/admin_email', 'HomeController@mail')->name('admin_email');
Route::get('/discount', 'HomeController@discount')->name('discount');
Route::get('/policy', 'HomeController@policy')->name('policy');
Route::get('/welcome', 'HomeController@welcome')->name('welcome');
Route::get('/booking', 'HomeController@booking')->name('booking');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/blog', 'HomeController@blog')->name('blog');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::get('/destination', 'HomeController@destination')->name('destination');
Route::get('/gallery', 'HomeController@gallery')->name('gallery');
Route::get('/', function () {
    return view('welcome');
});
