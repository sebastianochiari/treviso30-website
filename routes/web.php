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

Route::get('news/{id}', ['as' => 'news.category', 'uses' => 'NewsController@getCollection'])->where('id', '^[0-9]*$');
Route::get('news/{slug}', ['as' => 'news.single', 'uses' => 'NewsController@getSingle'])->where('slug', '[\w\d\-\_]+');

Route::get('contact', 'PagesController@getContact');
Route::get('about', 'PagesController@getAbout');
Route::get('rivista', 'PagesController@getMagazine');
Route::get('/', 'PagesController@getIndex');

Route::resource('posts', 'PostController');
Route::resource('riviste', 'RivistaController')->only([
    'index', 'create', 'store', 'destroy'
]);

Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function(){
    Route::resource('/users', 'UsersController')->only([
        'index', 'edit', 'update', 'destroy'
    ]);
    Route::resource('/sponsors', 'SponsorController')->only([
        'index', 'create', 'store', 'destroy'
    ]);
});

Auth::routes();
