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


Auth::routes();

Route::get('/', 'DashboardController@index');


Route::get('/dashboard', 'DashboardController@index');


Route::get('/accounts', 'AccountController@index');
Route::get('/accounts/{userType}', 'AccountController@getUsers');
Route::get('/account/{userId}', 'AccountController@userDetailDisplay');
Route::post('/resetPassword', 'AccountController@resetPassword');



Route::get('/courses', 'CoursesController@index');
Route::get('/students', 'StudentController@index');
Route::get('/gallery', 'GalleryController@index');
Route::get('/events', 'EventController@index');
Route::get('/promo-code', 'PromoCodeController@index');


