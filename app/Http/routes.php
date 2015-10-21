<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome', ['bodyClass' => 'raptorBack']);
});

Route::resource('image', 'ImageController');
Route::resource('item', 'ItemController');
Route::resource('collection', 'CollectionController');

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Password reset link request routes...
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');

Route::group(['middleware' => 'auth', 'prefix' => 'home'], function () {
    Route::get('/', 'Admin\CollectionAdminController@index');
    Route::get('/collections', 'Admin\CollectionAdminController@index');
    Route::get('/items', 'Admin\ItemAdminController@index');
    Route::get('/item/{id}/manage', 'Admin\ItemAdminController@manage');
    Route::get('/item/images', 'Admin\ItemAdminController@allImages');
});