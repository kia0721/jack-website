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
Route::get('/register', 'HomeController@register');
Route::post('/contactUs', 'HomeController@contactUs');
Route::post('/registerStudent', 'HomeController@addRegister');

Route::prefix('courses')->group(function () {
	Route::get('/', 'HomeController@courses');
	Route::get('/summer', 'HomeController@summer');
	Route::get('/junior', 'HomeController@junior');
	Route::get('/master', 'HomeController@master');
});

Route::get('/calendar', 'HomeController@calendar');
Route::get('/e-magazine', 'HomeController@emagazine');
Route::get('/faqs', 'HomeController@faqs');
Route::get('/gallery', 'HomeController@gallery');
Route::get('/downloadCalendar', 'HomeController@downloadCalendar');
