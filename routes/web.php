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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', 'Admin\HomeController@index');
	Route::get('logout', 'Admin\HomeController@logout');
    Route::get('dashboard', 'Admin\DashboardController@index');
    Route::post('login', 'Admin\HomeController@login');
    Route::resource('user','Admin\UserController');
    Route::resource('blog','Admin\BlogController');
    Route::resource('profile','Admin\UserController');
});

Route::group(['prefix' => '/'], function () {
	Route::get('/', 'Front\UserController@index');
	Route::get('register', 'Front\UserController@create');
	Route::resource('profile', 'Front\UserController');
	Route::resource('blog', 'Front\BlogsController');
    Route::post('store', 'Front\UserController@store');
	Route::post('update', 'Front\UserController@store');
    Route::get('login', 'Front\UserController@login');
	Route::post('logincheck', 'Front\HomeController@login');
	Route::get('logout', 'Front\HomeController@logout');
	Route::get('dashboard', 'Front\DashboardController@index');
});
