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

Route::get('/dashboard','HomeController@index')->name('dashboard');
Route::get('/lessons','HomeController@index')->name('lessons');
Route::get('/practice','HomeController@index')->name('practice');
Route::get('/swap','HomeController@index')->name('swap');
Route::get('/account','HomeController@index')->name('account');

/*---COACHING ROUTES---*/
Route::get('/coaches','CoachController@index')->name('coaches');
Route::get('/coaches/{slug}','CoachController@getFullPageBiographyFromSlug_web')->name('coachProfile');

/*---Organization Routes---*/
Route::get('/orgs/{id}','OrganizationController@getOrganizationById')->name('getOrganizationById');

Route::get('/app', function () {
    return view('webApp');
});
Auth::routes();
