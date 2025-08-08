<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TamuController;

Route::post('/admin/tamu', [TamuController::class, 'store'])->name('tamu.store');
Route::delete('/admin/tamu/{id}', [TamuController::class, 'destroy'])->name('tamu.destroy');
