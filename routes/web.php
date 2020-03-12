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

Route::get('/', 'MainController@index');
Route::post('/add-subscriber', 'SubscribersController@store');
Route::post('home/', 'MainController@store')->name('mainImage.store');
Route::post('home/aboutUs', 'AboutUsController@store')->name('aboutUs.store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
