<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Admin\PumpController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AuthController::class, 'login'])->name('login');
Route::post('/', [AuthController::class, 'auth'])->name('auth');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['admin.check', 'auth:sanctum'])->group(function () {
    Route::get('main', [MainController::class, 'index'])->name('main');

    Route::prefix('user')->name('user.')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('index');
        Route::get('create', [UserController::class, 'create'])->name('users.create');
        Route::post('store', [UserController::class, 'store'])->name('users.store');
        Route::get('edit/{user}', [UserController::class, 'edit'])->name('users.edit');
        Route::post('update/{user}', [UserController::class, 'update'])->name('users.update');
        Route::get('delete/{user}', [UserController::class, 'delete'])->name('users.delete');
    });
    Route::prefix('pump')->name('pump.')->group(function () {
        Route::get('/', [PumpController::class, 'index'])->name('index');
        Route::get('create', [PumpController::class, 'create'])->name('pumps.create');
        Route::post('store', [PumpController::class, 'store'])->name('pumps.store');
        Route::get('edit/{pump}', [PumpController::class, 'edit'])->name('pumps.edit');
        Route::post('update/{pump}', [PumpController::class, 'update'])->name('pumps.update');
        Route::get('delete/{pump}', [PumpController::class, 'delete'])->name('pumps.delete');
    });

});
