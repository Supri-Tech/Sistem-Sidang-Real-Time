<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\SidangController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/auth/login', [AuthController::class, 'login'])->name('get.login');
Route::get('/auth/register', [AuthController::class, 'register'])->name('get.register');

Route::get('/sidang', [SidangController::class, 'index'])->name('sidang');
