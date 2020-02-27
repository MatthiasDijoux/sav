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

Route::prefix('/')->group(function () {
    Route::get('/','UsersController@index');
    Route::get('/{nom}','UsersController@more')->where('nom', "[A-Z,a-z]+");
    Route::get('/exchanges/{id}','UsersController@log');    
});

    Route::prefix('/users/')->group(function(){
        Route::get('/exchanges', 'UsersController@get');
        Route::post('/exchanges','UsersController@add');
    });
