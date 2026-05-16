<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

Route::get('/', DashboardController::class)->name('dashboard.index');

Route::prefix('/cv')->name('cv.')->group(function() {
    require __DIR__ . '/web/cv.php';
});

Route::prefix('/auth')->name('auth.')->group(function () {
    require __DIR__ . '/web/auth.php';
});