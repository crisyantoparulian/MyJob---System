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
    return view('welcome');
});
Route::get('signup','UsersController@signup')->name('signup');
Route::post('signup','UsersController@signup_store')->name('signup.store');
Route::post('login','SessionsController@login_store')->name('login.store');
Route::get('logout','SessionsController@logout')->name('logout');
Route::get('login','SessionsController@login')->name('login');
Route::get('forgot-password', 'ReminderController@create')->name('reminders.create');
Route::post('forgot-password', 'ReminderController@store')->name('reminders.store');
//this routes for handle changes password
Route::get('reset-password/{id}/{token}', 'ReminderController@edit')->name('reminders.edit');
Route::post('reset-password/{id}/{token}','ReminderController@update')->name('reminders.update');
Route::get('activation/{id}/{token}','UsersController@update')->name('users.update');
Route::resource('details', 'DetailUserController');
Route::group(['prefix'=>'admin'], function(){
	Route::resource('manages', 'AdminController');
	Route::get('manages-list','AdminController@list')->name('manages.list');
	Route::get('manages-admin','AdminController@admin')->name('manages.admin');
	Route::get('change/{user_id}','AdminController@change')->name('manages.change');
	Route::get('reject/{user_id}','AdminController@reject')->name('manages.reject');
});