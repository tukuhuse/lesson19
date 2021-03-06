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

Route::group(['prefix' => 'admin'], function() {
  Route::get('new/create', 'Admin\NewsController@add');
});

//課題4
route::group(['prefix' => 'admin'], function() {
  route::get('profile/create', 'Admin\ProfileController@add');
  route::get('profile/edit', 'Admin\ProfileController@edit');
});