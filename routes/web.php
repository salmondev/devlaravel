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

use App\Http\Controllers\HelloController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('users', function () {
    return '<h1>User! 555</h1>';
});

Route::get('showname', function () {
    return '<h1>Hello World! 555</h1>';
});

Route::get('welcome/{name}','HelloController@title');

Route::get('showproduct/{product}','HelloController@resultProduct');

Route::get('/create', function () {
    return view('create.view');
});

Route::get('/show','HelloController@showData');

Route::get('/home', function () {
    return view('home');
});

Route::get('/alert', function () {
    return view('alert');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});

