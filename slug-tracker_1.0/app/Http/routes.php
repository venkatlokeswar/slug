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
Route::group(['middleware' => ['web']], function () {
//   
     Route::auth();
     Route::get('/', [
    'as' => 'index',
    'uses' => 'LoginController@index'
     ]);

     Route::post('/login', [
          'as' => 'login',
          'uses' => 'LoginController@getLogin'
     ]);

     Route::get('/register',[
         'as' => 'register',
         'uses' => 'LoginController@doRegister'
     ]);

     Route::get('/dashboard',[
         'as' => 'dashboard',
         'uses' => 'DashboardController@index'
     ]);
     
});
