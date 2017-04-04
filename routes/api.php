<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
/*---SKATING CREDENTIAL ROUTES ---*/
Route::get('/credentials','CredentialController@index')->name('credentialIndex');
Route::get('/credentials/{cred}','CredentialController@getCredentialByIDWithSkills')->name('credentialWithID');

/*---COACH API ROUTES --*/

Route::get('/coach/','CoachController@index')->name('coachIndex');
Route::get('/coach/{slug}','CoachController@getFullPageBiographyFromSlug')->name('coachProfilePage');
Route::post('/coach','CoachController@search')->name('searchCoaches');
/*--USER API ROUTES---*/

