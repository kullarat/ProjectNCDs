<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('welcome', 'WelcomeController@index');

Route::get('about', 'WelcomeController@about');

Route::get('contact', 'WelcomeController@contact');

Route::get('article', 'WelcomeController@article');

Route::get('disease', 'WelcomeController@disease');

Route::get('profile', 'WelcomeController@profile');

Route::get('gallery', 'WelcomeController@gallery');

Route::get('chart', 'WelcomeController@chart');

Route::get('food', 'WelcomeController@food');

Route::get('showprofile', 'WelcomeController@showprofile');

Auth::routes();

Route::get('/welcome', 'WelcomeController@index')->name('welcome');
