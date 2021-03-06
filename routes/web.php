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

Route::get('/curso/{course_slug}', 'PublicController@course');
Route::get('/curso/{course_slug}/{group_slug}/{theme_slug}', 'PublicController@theme');
//Route::get('/{course}/{theme_id}', 'PublicController@theme');
Route::view('/', 'public.index');
// Route::view('/single-blog', 'public.single_blog');
// Route::view('/about', 'public.about');
// Route::view('/coming-soon', 'public.coming_soon');
// Route::view('/hosting','public.hosting');
Route::get('/blog','PublicController@blog');
Route::get('/blog/{blog_slug}','PublicController@blog_detalle');
// Route::view('/404','public.404');
// ------ Fin de rutas publicas-------//



// ------- Rutas admin ---------------//


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


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
