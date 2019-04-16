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

Route::get('/', function () {
    return view('welcome');
});




Route::prefix('admin')->group(function () {
    Route::view('/', 'admin.index');

    Route::resource('courses', 'CourseController');

    Route::resource('groups', 'GroupController')->only([
        'store', 'update', 'edit', 'show'
    ]);   
    
    Route::get('groups/index/{course}','GroupController@index');
    Route::get('groups/create/{course}','GroupController@create');

    //Route::resource('themes', 'CourseController');


});