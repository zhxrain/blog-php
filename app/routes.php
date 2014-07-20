<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
App::missing(function($exception)
{
  // shows an error page (app/views/error.blade.php)
  // returns a page not found error
  return Response::view('errors.404', array(), 404);
});

Route::get('/', 'HomeController@showIndex');

Route::resource('posts', 'PostController');
Route::get('post/search', 'PostController@search');
Route::resource('comments', 'CommentController');
Route::post('post/imgupload', 'PostController@imgupload');
Route::group(array('prefix' => 'api/v1'), function()
{
    Route::resource('post', 'api\v1\PostController');
});

Route::get('admin', 'PostAdminController@index');
Route::get('admin/login', 'PostAdminController@login');
Route::post('admin/login', 'PostAdminController@postLogin');
Route::get('admin/logout', 'PostAdminController@logout');
Route::get('admin/editor/{id}', 'PostAdminController@showEditor');
Route::get('admin/editor', 'PostAdminController@createEditor');
