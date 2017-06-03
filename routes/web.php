<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dump', 'UserController@dumpAll');
Route::get('app/{vue_capture?}', function() {
    return view('webAppShell');
})->where('vue_capture', '[\/\w\.-]*');
Auth::routes();//gets authentication routes
