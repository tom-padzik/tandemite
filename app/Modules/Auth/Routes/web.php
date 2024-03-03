<?php

use App\Modules\Auth\Http\Controllers\AuthLoginController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [AuthLoginController::class, 'login'])
    ->name('login.get');

Route::post('/login', [AuthLoginController::class, 'auth'])
    ->name('login.post');
