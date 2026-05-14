<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CV\CreateController;
use App\Http\Controllers\CV\IndexController;
use App\Http\Controllers\CV\GenerateController;
use App\Http\Controllers\CV\StoreController;

Route::get('/', IndexController::class)->name('index');

Route::get('/create/step1', [CreateController::class, 'step1'])->name('create.step1');
Route::post('/create/step1', [StoreController::class, 'step1'])->name('store.step1');

Route::get('/create/step2', [CreateController::class, 'step2'])->name('create.step2');
Route::post('/create/step2', [StoreController::class, 'step2'])->name('store.step2');

Route::get('/create/step3', [CreateController::class, 'step3'])->name('create.step3');
Route::post('/create/step3', [StoreController::class, 'step3'])->name('store.step3');

Route::get('/create/generate', GenerateController::class)->name('generate');