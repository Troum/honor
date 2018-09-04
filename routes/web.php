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

Route::get('/', 'IndexController@index');
Route::get('/generate', 'IndexController@generate');
Route::post('/register-in-game', 'IndexController@register');
Route::post('/send-question', 'IndexController@question');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/{id}', 'HomeController@open');
Route::get('/home/check/{id}', 'HomeController@status');
Route::post('/home/send-sms', 'HomeController@send');