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



Route::get('/create-survey', 'SurveyController@createView');
Route::post('/createSurvey', 'SurveyController@createSurvey');
Route::post('/updateSurvey', 'SurveyController@updateSurvey');
Route::get('/survey/{surveyId}', 'SurveyController@surveyDetailView');
Route::post('/sendSurvey', 'SurveyController@sendSurvey');
Route::post('/addRecipient', 'SurveyController@addRecipient');
Route::get('/survey/deleteRecipient/{id}', 'SurveyController@deleteRecipient');


Route::get('/surveys', 'SurveyController@surveysView');




Route::get('/answer/survey/{surveyId}/{token}', 'CustomerController@surveySheetView');
Route::post('/submitSurvey', 'CustomerController@submitSurvey');



Route::get('/getIsSentId', 'TestSurveyController@getIsSentId');
Route::get('/getIsDeletedId', 'TestSurveyController@getIsDeletedId');
Route::get('/getIsAnsweredId', 'TestSurveyController@getIsAnsweredId');
