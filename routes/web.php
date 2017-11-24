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

Route::get('/', function () {
    return redirect('/home');
});




Route::get('/accounts', 'AccountController@index');
Route::get('/accounts/{userType}', 'AccountController@getUsers');
Route::get('/account/{userId}', 'AccountController@userDetailDisplay');
Route::post('/resetPassword', 'AccountController@resetPassword');


Route::prefix('admin')->group(function () {
	Route::get('/dashboard', 'DashboardController@index');
	Route::get('/courses', 'CoursesController@index');
	Route::get('/courses/detail/{id}', 'CoursesController@detailView');
	Route::post('/addSchedule', 'CoursesController@addSchedule');


	Route::get('/students', 'StudentController@index');
	Route::get('/gallery', 'GalleryController@index');
	Route::get('/events', 'EventController@index');
	Route::get('/promo-code', 'PromoCodeController@index');
});

Route::get('/home', 'HomeController@index');
Route::get('/courses', 'HomeController@courses');
Route::get('/calendar', 'HomeController@calendar');
Route::get('/e-magazine', 'HomeController@emagazine');
Route::get('/faqs', 'HomeController@faqs');
