<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/
/*--USER API ROUTES---*/
//register new User with API
Route::post('/register','UserController@generateUserViaAPI');

/*---SKATING ACHIEVEMENT ROUTES ---*/
Route::get('achievements','AchievementController@index');
Route::get('achievements/coach','AchievementController@AchievementsThatAreCoachOnly');
Route::get('achievements/{achievement}','AchievementController@getAchievementByID');
Route::get('achievements/{achievement}/coaches','AchievementController@listCoachesWithThisAchievement');

/*---Program Routes---*/

/*---Skill Routes---*/

/*---Organization Routes---*/


/*---COACHING API ROUTES --*/
//First are public routes
Route::get('/coach/','CoachController@index')->name('coachIndex_api');
Route::post('/coach/','CoachController@search')->name('searchCoachesAPI');
Route::get('/coach/{slug}','CoachController@getFullPageBiographyFromSlug');

//These are protected coach routes
Route::group(['middleware' => 'auth:api'], function () {

    Route::get('coach/students','CoachController@showMyStudents');
    Route::post('coach/students/enroll','CoachController@AddStudent');
    Route::delete('coach/students/{student}','CoachController@RemoveStudent');
    Route::post('coach/students/verify','CoachController@VerifyCoachingRelationship');
    Route::patch('coach/students/relationships','CoachController@UpdateCoachingRelationship');

    Route::patch('coach/profile/pic','CoachController@UpdateMyProfilePicture');
    Route::patch('coach/profile/biography','CoachController@UpdateMyBiography');

});


/*---Practice Routes---*/
//All practice routes are protected

Route::group(['middleware' => 'auth:api'], function () {
});


/*----Lesson Routes---*/
//All lesson routes are protected
Route::group(['middleware' => 'auth:api'], function () {

});
/*---Message/Thread Routes-----*/
//All message/thread routes are protected
Route::group(['middleware' => 'auth:api'], function () {

});