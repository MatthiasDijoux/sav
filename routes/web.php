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

Route::prefix('users')->group(function () {
    Route::get('/','UsersController@index');
    Route::get('/{nom}','UsersController@more')->where('nom', "[A-Z,a-z]+");
    });

    Route::prefix('exchanges')->group(function(){
        Route::get('/', 'UsersController@get');
        Route::post('/','UsersController@add');
    });
