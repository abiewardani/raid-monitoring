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
Route::get('/sync', 'HomeController@sync');// Process the login form

Route::group(array('prefix' => 'detail'), function() {
    Route::get('/', 'HomeController@detail');// Process the login form
});
//
//Route::group(array('prefix' => 'works'), function() {
//    Route::get('review/{slug}', array('uses' => 'WorksController@review'));
//});
//
//Route::group(array('prefix' => 'admin'), function() {
//    Route::group(array('prefix' => 'food'), function() {
//        Route::get('/', 'FoodController@index');
//        Route::get('add', 'FoodController@add');
//        Route::get('edit', 'FoodController@edit');
//        Route::get('delete', 'FoodController@delete');
//        Route::post('save', array('as' => 'save', 'uses' => 'FoodController@save'));
//        Route::post('update', array('as' => 'update', 'uses' => 'FoodController@update'));
//    });
//});


Route::group(array('prefix' => 'food'), function() {
    Route::get('detail', 'FoodController@detail');
});