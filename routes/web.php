<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

require __DIR__ . '/phinisi.php';
require __DIR__ . '/rsvp.php';
require __DIR__ . '/tamu.php';

Route::get('/', function () {
    // Tampilkan undangan Phinisi sebagai halaman utama
    return view('phinisi.index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
