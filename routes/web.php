<?php

use Illuminate\Support\Facades\Route;

// Route::get('posts/create', 'PostController@create')->name('posts.create');
// Route::get('posts/create', 'PostController@create')->middleware('auth')->name('posts.create');

Route::prefix('posts')->middleware('auth')->group(function() {
    Route::get('/create', 'PostController@create')->name('posts.create');
    Route::post('/store', 'PostController@store');

    Route::get('/{post:slug}/edit', 'PostController@edit');
    Route::patch('/{post:slug}/edit', 'PostController@update'); 
    Route::delete('/{post:slug}/delete', 'PostController@destroy'); 
    Route::get('/', 'PostController@index')->name('posts.index')->withoutMiddleware('auth');
    Route::get('/{post:slug}', 'PostController@show')->withoutMiddleware('auth');

});

Route::get('categories/{category:slug}', 'CategoryController@show');
Route::get('tags/{tag:slug}', 'TagController@show');

Route::view('contact', 'contact');
Route::view('about', 'about');
Route::view('login', 'login');

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
