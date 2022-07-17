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
    Route::resource('department','DepartmentController');
    Route::resource('services','ServiceController');
    Route::get('first_section','FirstSectionController@index')->name('first_section');
    Route::post('first_section','FirstSectionController@store')->name('first_section_post');
    Route::get('statistic','StatisticController@index')->name('statistic.index');
    Route::post('statistic','StatisticController@store')->name('statistic.post');
    Route::get('language_translate/{local}','GeneralController@show_translate')->name('show_translate');
    Route::post('/languages/key_value_store', 'GeneralController@key_value_store')->name('languages.key_value_store');
    Route::get('partners','PartnerController@index')->name('partners');
    Route::post('partners','PartnerController@store')->name('partners_post');
    Route::delete('partners/{id}','PartnerController@destroy')->name('partners_post_destroy');
    Route::get('third_section','ThirdSectionController@index')->name('third_section');
    Route::post('third_section','ThirdSectionController@store')->name('third_section_post');
    Route::resource('communication', 'CommunicationController');
    Route::get('edit-profile','UserController@edit_profile')->name('edit.profile');
    Route::post('edit-profile','UserController@update_profile')->name('update.profile');
    Route::get('logout','UserController@logout')->name('logout.user');
    Route::get('add_job_title','ClientController@jobTitle')->name('add.job_title');
    Route::post('show_model', 'ClientController@show_model')->name('showpostModal');
    Route::post('update_client', 'ClientController@update_info')->name('update_info');
    Route::get('refresh_table_user','ClientController@refresh_table')->name('user.refresh');
    Route::post('add_new_communcation','CommunicationController@add_new_communcation')->name('add_new_communcation');
    Route::get('add_service_title','CommunicationController@serviceTitle')->name('add.service_title');
    Route::get('add_comuncate/{id}','CommunicationController@add_comuncate')->name('add_comuncate.new');
    Route::get('new_client','ClientController@new_client')->name('new.client');
    Route::post('new_client','ClientController@post_new_client')->name('post_new.client');
    Route::resource('programs','ProjectController');
    Route::resource('blogs','BlogController');

    Route::resource('contacts', 'ContactusController')->except(['create','edit','update']);

});


Route::group([ 'middleware' => 'guest'], function () {
    Route::get('login', 'UserController@get_login')->name('user.get_login');
    Route::post('login', 'UserController@post_login')->name('user.post_login');
});
