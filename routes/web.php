<?php

use App\Facades\Route;
use App\Controllers\HomeController;

Route::get('/', HomeController::class, 'index');

Route::dispatch();