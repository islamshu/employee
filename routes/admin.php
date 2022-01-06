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
Route::group([ 'middleware' => 'auth'], function () {
    Route::get('/','UserController@dashboard')->name('user.dashboard');
    Route::get('generalinfo','GeneralController@index')->name('generalinfo.index');
    Route::post('generalinfo','GeneralController@store')->name('generalinfo.store');
    Route::resource('employees','UserController');
    Route::resource('clients','ClientController');
    Route::resource('communication', 'CommunicationController');
    Route::get('edit-profile','UserController@edit_profile')->name('edit.profile');
    Route::post('edit-profile','UserController@update_profile')->name('update.profile');
    Route::get('logout','UserController@logout')->name('logout.user');

});


Route::group([ 'middleware' => 'guest'], function () {
    Route::get('login', 'UserController@get_login')->name('user.get_login');
    Route::post('login', 'UserController@post_login')->name('user.post_login');
});
