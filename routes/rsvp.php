<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RsvpController;

Route::post('/rsvp', [RsvpController::class, 'store'])->name('rsvp.store');
Route::get('/rsvp', [RsvpController::class, 'index'])->name('rsvp.index');
