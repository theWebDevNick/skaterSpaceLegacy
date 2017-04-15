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

/*---Auth Route Over-rides---*/
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('getLogout');//because default uses POST

/*--General Routes --*/
Route::get('/dashboard','HomeController@index')->name('dashboard');
Route::get('/lessons','HomeController@index')->name('lessons');
Route::get('/practice','HomeController@index')->name('practice');
Route::get('/swap','HomeController@index')->name('swap');
Route::get('/account','AccountController@index')->name('account');

/*--Special Routes --*/
Route::get('/verify/{token}','UserController@verifyEmail')->name('verifyEmail');
/*---COACHING ROUTES---*/
Route::get('/coaches','CoachController@index')->name('coaches');
Route::get('/coaches/{slug}','CoachController@getFullPageBiographyFromSlug_web')->name('coachProfile');

/*---Organization Routes---*/
Route::get('/orgs/{id}','OrganizationController@getOrganizationById')->name('getOrganizationById');

Route::get('/app', function () {
    return view('webApp');
});
Auth::routes();
