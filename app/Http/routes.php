<?php

// Pages routes
Route::get('impressum', 'PagesController@impressum');

// User routes
Route::resource('users', 'UsersController');

// Authentication routes
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes
Route::post('auth/register', 'Auth\AuthController@postRegister');

// Language based routes
Route::group(['middleware' => 'localization'], function()
{
    // Search routes
    Route::post('search/{lang?}', 'SearchController@search');

    Route::get('users/confirmation/{lang?}', 'UsersController@confirmation');
    Route::get('auth/login/{lang?}', 'Auth\AuthController@getLogin');
    Route::get('/auth/register/{lang?}', 'Auth\AuthController@getRegister');

    Route::get('users/{users}/edit/{lang?}', ['as' => 'users.edit', 'uses' => 'UsersController@edit']);
    Route::get('users/{users}/{lang?}', ['as' => 'users.show', 'uses' => 'UsersController@show']);

    Route::get('/{lang?}', ['as' => 'home', 'uses' => 'PagesController@index']);

});
