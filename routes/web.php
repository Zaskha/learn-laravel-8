<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// //menggunakan compact
// Route::get('profile', function() {
//     $fullName = "Zaskha";
//     // compact('name') = ['name', $name]
//     return view('profile', compact('fullName'));
// });

//bisa dipersingkat jika tidak ada parsing data, variable
Route::get('/', fn() => view('home')); // ini adalah cara 7.4


// menggunakan tradisional laravel
// Route::view('/', 'home');
// keterangan nya : 
// Route::view($uri, $view, $data=[], $status = 200, $headers = [])

Route::get('profile', function() {
    $name = 'Zaskha';
    return view('profile', [
        'name' => $name,
    ]);
});