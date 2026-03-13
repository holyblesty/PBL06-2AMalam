<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;


Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout']);
Route::get('/dashboard', [DashboardController::class, 'index']);
