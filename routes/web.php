<?php

use App\Controllers\AuthController;
use App\Facades\Route;
use App\Controllers\HomeController;

Route::get('/', HomeController::class, 'index');
Route::get('/register', AuthController::class, 'showRegister');
Route::post('/register', AuthController::class, 'register');
Route::get('/login', AuthController::class, 'showLogin');
Route::post('/login', AuthController::class, 'login');

Route::dispatch();