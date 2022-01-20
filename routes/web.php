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



Route::get('/', 'HomePageController@index1')->name('homeRoute');

Route::get('/offers', 'TravelController@index1')->name('travelRoute');
Route::get('/blog', 'PostController@index1')->name('blogRoute');

Route::get('/travel/{id}', 'TravelController@index2')->name('single-travelRoute');
Route::get('/blog/{id}', 'PostController@index2')->name('single-blogRoute');







