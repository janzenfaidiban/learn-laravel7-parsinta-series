<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index');

Route::get('/posts/{post:slug}', 'PostController@show');

Route::view('/contact', 'contact');
Route::view('/about', 'about');
Route::view('/login', 'login');
