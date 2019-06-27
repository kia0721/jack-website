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

Route::get('/', function () {
    return redirect('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/home2', 'HomeController@index')->name('home');
Route::get('/about', 'HomeController@about');
Route::get('/program', 'HomeController@program');
Route::get('/emagazine', 'HomeController@emagazine');
Route::get('/register', 'HomeController@register');
Route::get('/error', 'HomeController@error');
Route::get('/faqs', 'HomeController@faqs');
Route::get('/policies', 'HomeController@policies');
Route::get('/cart', 'HomeController@cart');


Route::post('/contactUs', 'HomeController@contactUs');

Route::get('/saveToCart', 'SessionController@saveToCart');
Route::get('/getSavedCart', 'SessionController@getSavedCart');
Route::get('/removeSaveCourse', 'SessionController@removeSaveCourse');
Route::post('/saveSchedule', 'SessionController@saveSchedule');

Route::post('/saveStudentInfo', 'SessionController@saveStudentInfo');
Route::get('/getStudentInfo', 'SessionController@getStudentInfo');


Route::get('/getCourseSchedule', 'CartController@getCourseSchedule');


Route::post('/forgotStudentId', 'RegisterController@forgotStudentId');
Route::post('/registerStudent', 'RegisterController@registerStudent');



