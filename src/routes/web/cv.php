<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CV\CreateController;

Route::get('/create', CreateController::class)->name('create');