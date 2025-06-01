<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HakimController;
use App\Http\Controllers\SidangController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    /* return view('welcome'); */
    return view('index');
});

Route::get('/auth/login', [AuthController::class, 'login'])->name('get.login');
Route::get('/auth/register', [AuthController::class, 'register'])->name('get.register');

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');

    Route::prefix('kelola-user')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('admin.kelola-user');
        Route::get('/create', [UserController::class, 'create'])->name('admin.kelola-user.create');
        Route::post('/create', [UserController::class, 'add'])->name('admin.kelola-user.add');
        Route::get('/update/{id}', [UserController::class, 'update'])->name('admin.kelola-user.update');
        Route::put('/update/{id}', [UserController::class, 'edit'])->name('admin.kelola-user.edit');
    });

    Route::prefix('kelola-sidang')->group(function () {
        Route::get('/', [SidangController::class, 'index'])->name('admin.kelola-sidang');
        Route::get('/{id}', [SidangController::class, 'show'])->name('admin.kelola-sidang.show');
    });

    Route::prefix('kelola-hakim')->group(function () {
        Route::get('/', [HakimController::class, 'index'])->name('admin.kelola-hakim');
    });
});
