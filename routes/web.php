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
use App\skating_credentials;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/app', function () {
    return view('webApp');
});



Route::get('coach/{id}',function(App\coach_pages $coach){
    return $coach;
            });
Route::get('/credentials',function($id){
    //list all;
});

Route::get('/credentials/{cred}',function(App\skating_credentials $cred){
    return $cred::with('skills','programId','skatingLevel','grantingOrg')->get();
});
