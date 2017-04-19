<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/
/*--USER API ROUTES---*/
//register new User with API
Route::post('/register','UserController@generateUserViaAPI')->name('');
/*---SKATING ACHIEVEMENT ROUTES ---*/
Route::get('/achievements','AchievementController@index')->name('achievements');
Route::get('/achievements/{id}','AchievementController@getCredentialByID')->name('credentialWithID_api');

/*---Program Routes---*/

/*---Skill Routes---*/

/*---Organization Routes---*/

/*---COACH API ROUTES --*/
//First are public routes
Route::get('/coach/','CoachController@index')->name('coachIndex_api');
Route::post('/coach/','CoachController@search')->name('searchCoachesAPI');
Route::get('/coach/{slug}','CoachController@getFullPageBiographyFromSlug')->name('coachProfilePage_api');


/*---Practice Routes---*/

/*----Lesson Routes---*/


/*---Message/Thread Routes-----*/
