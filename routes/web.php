<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/
use App\skating_achievements;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/app', function () {
    return view('webAppShell');
});

/*---Auth Route Over-rides---*/
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('getLogout');//because default uses POST

/*--General Routes --*/
Route::get('/dashboard','HomeController@index')->name('dashboard');
Route::get('/lessons','HomeController@index')->name('lessons');

Route::get('/swap','HomeController@index')->name('swap');
Route::get('/account','AccountController@index')->name('account');

/*--Special Routes --*/
Route::get('/verify/{token}','UserController@verifyEmail')->name('verifyEmail');
/*---COACHING ROUTES---*/
Route::get('/coaches','CoachController@index')->name('coaches');
Route::get('/coaches/{slug}','CoachController@getFullPageBiographyFromSlug_web')->name('coachProfile');

/*---Organization Routes---*/
Route::get('/orgs/{id}','OrganizationController@getOrganizationById')->name('getOrganizationById');



/*--Practice Routes ---*/
Route::get('/practice','PracticeController@index')->name('practice');
Route::get('/practice/create','PracticeController@createForm')->name('createPracticeForm');
Route::post('/practice/create','PracticeController@create')->name('createPractice');
Route::get('/practice/edit/{id}','PracticeController@edit')->name('editPracticeForm');
Route::patch('/practice/edit','PracticeController@editForm')->name('editPractice');



Auth::routes();
