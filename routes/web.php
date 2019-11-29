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

Auth::routes();

Route::get('/p/create','PostsController@create'); //执行postscontrol里面的那个function
Route::get('/p/{post}','PostsController@show');//route顺序很重要

Route::post('/p','PostsController@store');
Route::get('/profile/{user}', 'ProfilesController@index')->name('profile.show');

//修改个人profile
Route::get('/profile/{user}/edit', 'ProfilesController@edit')->name('profile.edit');
Route::patch('/profile/{user}', 'ProfilesController@update')->name('profile.update');

