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

Route::get('home', 'PagesController@getHome');
Route::get('login', 'PagesController@getLogin');
Route::get('about', 'PagesController@getAbout');
Route::get('contact', 'PagesController@getContact');
Route::get('predict', 'PagesController@getPredict');
Route::get('games', 'PagesController@getGames');
Route::post('contact/submit', 'MessagesController@submit');
Route::post('predict/submit', 'BookingsController@submit_1');
Route::get('messages', 'MessagesController@getMessages');
Route::get('booking', 'BookingsController@getBooking');
   

Route::get('/', function () {
    return view('welcome');
});


Route::get('austin/{name}', function ($name) {
    return "hello $name this laravel is great";
});