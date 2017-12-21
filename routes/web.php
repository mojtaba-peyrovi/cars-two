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

Route::get('/','carsController@loadHome')->name('home');

Route::get('/cars','carsController@index')->name('cars');
Route::get('/car/create','carsController@create')->name('create');
Route::get('/cars/{car}','carsController@show')->name('show');
Route::get('/admin','backendController@index')->name('');
Route::post('/car/create','carsController@store')->name('store');
Route::get('/login','userController@loadLogin')->name('login');
Route::post('/signup','userController@userSignUp')->name('signup');
Route::post('/signin','userController@userSignIn')->name('signin');
Route::get('/delete-car/{car_id}','carsController@destroy')->name('car.delete');
