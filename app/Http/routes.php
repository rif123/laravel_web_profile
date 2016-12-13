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
Route::get('/auth/login', ['uses'=>'LoginController@create','as'=>'loginCreate.create']);
Route::group(['before' => ['BeforeUserAuth']], function () {
    Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {
        Route::get('/', 'DashboardController@index');
    });
});

Route::group(['namespace' => 'Frontend', 'prefix' => '/'], function () {
    // Route::resource('event', 'EventController');
    Route::get('/', [
      'uses' => 'WelcomeController@index'
    ]);
});
