<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LetterController;
use Illuminate\Support\Facades\Route;

Route::middleware(['guest'])->group(function () {
    Route::get('/login', [AuthController::class, 'index'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');


    Route::prefix('letter')->group(function () {
        Route::get('', [LetterController::class, 'index'])->name('letter');
        Route::post('store', [LetterController::class, 'store'])->name('letter.store');
    });

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});


Route::get('/', function () {
    return redirect('/login');
});
