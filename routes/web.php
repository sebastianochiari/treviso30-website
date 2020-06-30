<?php

use Illuminate\Support\Facades\Route;

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

Route::get('news/{slug}', ['as' => 'news.single', 'uses' => 'NewsController@getSingle'])->where('slug', '[\w\d\-\_]+');

Route::get('post', 'PagesController@getPost');
Route::get('contact', 'PagesController@getContact');
Route::get('about', 'PagesController@getAbout');
Route::get('/', 'PagesController@getIndex');

Route::resource('posts', 'PostController');
Route::resource('categories', 'CategoryController', ['except' => ['create']]);

Auth::routes();
