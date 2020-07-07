<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::view('/contact', 'contact');
Route::view('/about', 'about');
Route::view('/login', 'login');
