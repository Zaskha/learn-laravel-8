<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn() => view('home')); // format routing ini hanya berjalan di php 7.4 dan keatas
Route::view('contact', 'contact');
Route::view('about', 'about');
Route::view('posts/first-post', 'posts.show');