<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileInformationController;
use App\Http\Controllers\ContactController;

Route::get('/', HomeController::class);
Route::get('profile/{identifier}', [ProfileInformationController::class, '__invoke']);
Route::get('contact', [ContactController::class, 'create']);
Route::post('contact', [ContactController::class, 'store']);