<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
| and give it the Closure to execute when that URI is requested.
| and give it the Closure to execute when that URI is requested.
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');// Process the login form
Route::get('/test', 'HomeController@sync');// Process the login form

Route::group(array('prefix' => 'detail'), function() {
    Route::get('/', 'HomeController@detail');// Process the login form
});

Route::group(array('prefix' => 'sync'), function() {
    Route::get('/', 'HomeController@detail');// Process the login form
});
