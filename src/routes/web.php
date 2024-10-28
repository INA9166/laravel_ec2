<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ {
    LoginController,
    HomeController,
};

Route::get('/', [LoginController::class, 'login']);
Route::post('/login/check', [LoginController::class, 'check']);
Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/home', [HomeController::class, 'home']);
