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

Route::get('/blog', 'PageController@index1')->name('blogRoute');
Route::get('/blog/{id}', 'PageController@index2')->name('single-blogRoute');

Route::get('/offers', 'PageController@index3')->name('blogRoute');
Route::get('/travel/{id}', 'PageController@index4')->name('single-travelRoute');





