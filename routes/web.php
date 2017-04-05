<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/
use App\skating_credentials;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard','HomeController@index')->name('dashboard');
Route::get('/lessons','HomeController@index')->name('lessons');
Route::get('/practice','HomeController@index')->name('practice');

Route::get('/swap','HomeController@index')->name('swap');
Route::get('/account','HomeController@index')->name('account');

/*---COACHING ROUTES---*/
Route::get('/coaches','CoachController@index')->name('coaches');
Route::get('/coaches/{slug}','CoachController@getFullPageBiographyFromSlug_web')->name('coachProfile');

Route::get('/app', function () {
    return view('webApp');
});
Auth::routes();
