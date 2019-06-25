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

// Layanan
Route::get('/jobhuncareerhub', 'Homepage_UserController@jch')->name('jch');

// Program
Route::get('/jobhun-internship', 'Homepage_UserController@ji')->name('ji');
Route::get('/jobhun-talks', 'Homepage_UserController@jt')->name('jt');
Route::get('/jobhun-visit', 'Homepage_UserController@jv')->name('jv');

// Blog
Route::get('/cerita-karier', 'Homepage_UserController@ck')->name('ck');
Route::get('/infografik', 'Homepage_UserController@infografik')->name('infografik');
Route::get('/karier-pedia', 'Homepage_UserController@kp')->name('kp');
Route::get('/artikel', 'Homepage_UserController@artikel')->name('artikel');
Route::get('/berita', 'Homepage_UserController@berita')->name('berita');
Route::get('/info-acara', 'Homepage_UserController@ia')->name('ia');




Route::get('/pageadmin', 'Homepage_AdminController@index')->name('index2');

// ======================== Bagian Admin di User ======================== //
Route::get('/adminuser', 'Homepage_AdminController@usertable')->name('admin.user');
Route::get('/adminuserform', 'Homepage_AdminController@userform')->name('admin.user.form');




// ======================== Bagian Admin di Post ======================== //
Route::get('/adminpost', 'Homepage_AdminController@posttable')->name('admin.post');
Route::get('/adminpostform', 'Homepage_AdminController@postform')->name('admin.post.form');




// ======================== Bagian Admin di Tag ======================== //
Route::get('/admintag', 'Homepage_AdminController@tagtable')->name('admin.tag');
Route::get('/admintagform', 'Homepage_AdminController@tagform')->name('admin.tag.form');