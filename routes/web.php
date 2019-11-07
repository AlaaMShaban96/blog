<?php

use App\Jobs\SendEmailJob;

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

// Route::get('/', function () {

//     SendEmailJob::dispatch()->delay(now()->addSecond(10));

//     dd("done");
// });

 Route::get('user/{user}', 'UserController@show');
// Route::resource('user', 'UserController');
// Route::post('user', 'UserController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
