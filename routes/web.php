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


// ------ Rutas publicas ------------//



//Route::get('/', 'PublicController@index');
Route::get('/cursos', 'PublicController@courses');
Route::get('/curso/{course_id}', 'PublicController@course');
Route::get('/{course}/{group}/tema', 'PublicController@theme');

Route::view('/', 'public.index');
Route::view('/single-blog', 'public.single_blog');
Route::view('/about', 'public.about');
Route::view('/coming-soon', 'public.coming_soon');
Route::view('/hosting','public.hosting');
Route::view('/blog','public.blog');
Route::view('/404','public.404');
// ------ Fin de rutas publicas-------//



// ------- Rutas admin ---------------//

Auth::routes();

Route::prefix('admin')->group(function () {

    Route::group(['middleware' => ['auth']], function () {
        Route::view('/', 'admin.index');  
        Route::resource('courses', 'CourseController');
        //------------------------------------------------//
        Route::resource('groups', 'GroupController')->only([
            'store', 'update', 'edit', 'show'
        ]);       
        Route::get('groups/index/{course}','GroupController@index');
        Route::get('groups/create/{course}','GroupController@create');
        //------------------------------------------------//

        Route::resource('themes', 'ThemeController')->only([
            'store', 'update', 'edit', 'show'
        ]);   
        Route::get('themes/index/{group}','ThemeController@index');
        Route::get('themes/create/{group}','ThemeController@create');
        //------------------------------------------------//


        Route::resource('blogs', 'BlogController');
        Route::resource('comments', 'CommentController');

    });   

});
//-------- Fin de rutas admin ------------------------//



Route::get('/home', 'HomeController@index')->name('home');
