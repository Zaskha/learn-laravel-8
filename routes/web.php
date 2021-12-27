<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', fn() => view('home')); // format routing ini hanya berjalan di php 7.4 dan keatas
Route::view('contact', 'contact');
Route::view('about', 'about');

Route::get('profile/{username}/{post}', function($username) {
    // $name = $request->get('nama');



    // $name = $request->nama;
    return view('profile', ['nama' => $username]);
});