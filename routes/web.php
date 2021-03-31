<?php

Route::namespace('App\\Http\\Controllers')->group(function () {

    Route::middleware('guest')->group(function () {
        Route::get('/login', 'Auth\AuthenticatedSessionController@create')->name('login');
        Route::post('/login', 'Auth\AuthenticatedSessionController@store')->name('login');

        Route::get('/register', 'Auth\RegisteredUserController@create')->name('register');
        Route::post('/register', 'Auth\RegisteredUserController@store')->name('register');
    });

    Route::middleware('auth')->group(function () {
        Route::get('/', 'ManagerController@index')->name('home');
        Route::get('/post/{post_id}', 'PostController@index')->name('posts.edit');

        Route::post('/logout', 'Auth\AuthenticatedSessionController@destroy')
            ->name('logout');
    });
});
