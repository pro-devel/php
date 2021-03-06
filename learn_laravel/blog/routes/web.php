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

Route::get('/', 'PostsController@index');
Route::get('/posts/{slug}', 'PostsController@show');
Route::get('/category/{category}', 'PostsController@catShow');
Route::get('/category', 'PostsController@catIndex');
Route::get('/admin/create', 'PostsController@create');
Route::post('/posts', 'PostsController@store');
Route::post('/posts/{slug}/comments', 'CommentsController@store');
Route::post('/search', 'PostsController@search');
Route::get('/search', 'PostsController@searchIndex');
Route::get('/register' , 'RegisterationController@index');
Route::post('/register' , 'RegisterationController@create');
Route::get('/login', 'SeasionsController@index');
Route::post('/login', 'SeasionsController@create');
Route::get('/logout', 'SeasionsController@destroy');
