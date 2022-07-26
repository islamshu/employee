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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index');

Route::get('lang/{lang}','HomeController@change_lang');
Route::get('about_program/{id}','HomeController@about_pr')->name('single_pro');
Route::get('blog/{slug}','HomeController@blog')->name('blog');
Route::get('blogs','HomeController@blogs')->name('blogs');

Route::post('submit-form', 'ContactController@store');
Route::post('submit-form-partner', 'ContactController@store_partner');


Route::get('contact_us',function(){
    return view('layouts.contact_us');
})->name('contact_us');
