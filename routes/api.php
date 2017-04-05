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
Route::get('/credentials','CredentialController@index')->name('credentialIndex_api');
Route::get('/credentials/{cred}','CredentialController@getCredentialByIDWithSkills')->name('credentialWithID_api');

/*---COACH API ROUTES --*/

Route::get('/coach/','CoachController@index')->name('coachIndex_api');
Route::get('/coach/{slug}','CoachController@getFullPageBiographyFromSlug')->name('coachProfilePage_api');
Route::get('/coach/search','CoachController@search')->name('searchCoaches_api');
/*--USER API ROUTES---*/

