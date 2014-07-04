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

Route::get('/', 'HomeController@showIndex');

Route::resource('posts', 'PostController');
Route::resource('comments', 'CommentController');

Route::get('admin', 'PostAdminController@index');
Route::get('admin/login', 'PostAdminController@login');
Route::post('admin/login', 'PostAdminController@postLogin');
Route::get('admin/logout', 'PostAdminController@logout');
Route::get('admin/editor/{id}', 'PostAdminController@showEditor');
Route::get('admin/editor', 'PostAdminController@createEditor');
