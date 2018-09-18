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

Route::get('/', 'HomeController@index');
Route::get('/contact', 'HomeController@contact');
Route::get('/about', 'HomeController@aboutUs');
Route::get('/services', 'HomeController@service');
Route::get('/doctors', 'HomeController@doctors');
Route::get('/hospitals', 'HomeController@hospitals');
Route::get('/all-hospitals', 'HomeController@allHospitals');
Route::get('/services-details', 'HomeController@servicesDetails');
Route::get('/search', 'HomeController@search');
Route::get('/country', 'HomeController@country');
Route::get('/requirement-name', 'HomeController@requirementName');

Route::get('/all-doctors', 'HomeController@allDoctors');
Route::get('/book-appointment', 'HomeController@bookAppointment');
Route::post('/add-appointment', 'HomeController@addAppointment');
Route::post('contact-us', 'HomeController@sendMessage');
Route::get('/logout','Auth\LoginController@logout');



	Route::get('admin/login','Admin\LoginController@login');
	Route::post('admin/login','Admin\LoginController@authentication');
		Route::group(['prefix' => 'admin', 'namespace' => 'Admin','middleware'=>'adminAuth'],function(){
			Route::get('logout','LoginController@logout');
			
			Route::get('/home', 'HomeController@index')->name('home');
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

			Route::resource('hospitals', 'HospitalController');
			Route::group(['prefix' => 'hospitals'],function(){
				Route::post('/status', 'HospitalController@changeStatus');
				//Route::resource('/', 'InvestorController');
			});

			Route::resource('services', 'ServiceController');
			Route::group(['prefix' => 'services'],function(){
				Route::post('/status', 'ServiceController@changeStatus');
				//Route::resource('/', 'InvestorController');
			});
			
		});
	
	

