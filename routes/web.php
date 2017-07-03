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

Route::get('/', function () {
    return view('auth.login');
});
Route::get('test', function(){
    return "You are on a test page";
});

Auth::routes();

Route::group(['middleware' => 'auth'], function () {

	Route::get('/home', 'HomeController@index')->name('home');
	Route::resource('tehsil', 'TehsilController');
	Route::resource('village', 'VillageController');
	Route::resource('branch', 'BranchController');
	Route::resource('component', 'ComponentController');
	Route::resource('loom', 'LoomController');
});

