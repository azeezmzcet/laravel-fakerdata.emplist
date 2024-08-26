<?php

use Illuminate\Support\Facades\Route;

use App\Http\controllers\UsertableController;

Route::get('/', [UsertableController::class, 'index']);

Route::get('/search', [UsertableController::class, 'index'])->name('UsertableModal.search');
Route::get('/', [UsertableController::class, 'index'])->name('UsertableModal.index');








