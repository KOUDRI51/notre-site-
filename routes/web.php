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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/search', function () {
    return view('search');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('event', 'eventController@index');
Route::get('event/create', 'eventController@create');
Route::post('event', 'eventController@store');
Route::get('event/{id}/edit', 'eventController@edit');
Route::put('event/{id}', 'eventController@update');
Route::delete('event/{id}', 'eventController@destroy');

