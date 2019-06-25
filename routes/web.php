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


// ======================== Bagian User ======================== //
Route::get('/', 'Homepage_UserController@index')->name('index');

Route::get('/about', 'Homepage_UserController@tentang')->name('about');

Route::get('/jobhuncareerhub', 'Homepage_UserController@jch')->name('jch');




Route::get('/PageAdmin', 'Homepage_AdminController@index')->name('index');

// ======================== Bagian Admin ======================== //
Route::get('/AdminTable', 'Homepage_AdminController@admintable')->name('admin.user');
Route::get('/AdminForm', 'Homepage_AdminController@adminform')->name('admin.user.form');