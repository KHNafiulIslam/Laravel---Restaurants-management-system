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

Route::get('/fishes', 'FishController@index')->middleware('auth');
Route::get('/fishes/create','FishController@create');
Route::post('/fishes','FishController@store');
Route::get('/fishes/{id}','FishController@show')->middleware('auth');
Route::delete('/fishes/{id}','FishController@destroy')->middleware('auth');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes(
[
    'register'=>false
]
);

Route::get('/home', 'HomeController@index')->name('home');
