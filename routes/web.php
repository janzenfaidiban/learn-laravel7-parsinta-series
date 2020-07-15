<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index');

Route::get('posts', 'PostController@index');
Route::get('posts/create', 'PostController@create');
Route::post('posts/store', 'PostController@store');

Route::get('posts/{post:slug}/edit', 'PostController@edit');
Route::patch('posts/{post:slug}/edit', 'PostController@update'); // put or patch
Route::delete('posts/{post:slug}/delete', 'PostController@destroy'); // put or patch
Route::get('categories/{category:slug}', 'CategoryController@show');
Route::get('tags/{tag:slug}', 'TagController@show');
Route::get('posts/{post:slug}', 'PostController@show');

Route::view('contact', 'contact');
Route::view('about', 'about');
Route::view('login', 'login');
