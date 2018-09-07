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

Route::get('/',
	function () {
	    return redirect('/login');
	}
);

Route::get('/', 'HomeController@index');
Route::get('doctors', 'HomeController@index');
Route::get('hospitals', 'HomeController@index');
Route::get('country', 'Country@country');


	Auth::routes();
	Route::get('/home', 'HomeController@index')->name('home');
	
	Route::group(['prefix' => 'admin', 'namespace' => 'Admin'],function(){
		Route::group(['prefix' => 'associate'],function(){
			Route::post('/status', 'AssociateController@changeStatus');
			Route::resource('/', 'AssociateController');
		});
		
		Route::group(['prefix' => 'investor'],function(){
			Route::post('/status', 'InvestorController@changeStatus');
			Route::resource('/', 'InvestorController');
		});

		Route::group(['prefix' => 'ajax'],function(){
			Route::get('/associate', 'AssociateController@ajaxList');
			//Route::resource('/', 'InvestorController');
		});

		Route::resource('doctors', 'DoctorController');
		Route::group(['prefix' => 'doctors'],function(){
			Route::post('/status', 'DoctorController@changeStatus');
			//Route::resource('/', 'InvestorController');
		});
		
	});
	
	

