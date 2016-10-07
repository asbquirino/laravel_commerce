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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

Route::pattern('id', '[0-9]+');

Route::group(['prefix'=>'admin'], function(){

    Route::group(['prefix'=>'categories'], function(){
    Route::get('', 'AdminCategoriesController@index');
    Route::get('create', 'AdminCategoriesController@create');
    Route::get('update/{id}', 'AdminCategoriesController@update');
    Route::get('delete/{id}', 'AdminCategoriesController@delete');
    });

    Route::group(['prefix'=>'products'], function(){
    Route::get('', 'AdminProductsController@index');
    Route::get('create', 'AdminProductsController@create');
    Route::get('update/{id}', 'AdminProductsController@update');
    Route::get('delete/{id}', 'AdminProductsController@delete');
    });

});
