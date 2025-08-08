<?php

use Illuminate\Support\Facades\Route;

// Route undangan utama dengan parameter nama tamu
Route::get('/undangan/phinisi', function (\Illuminate\Http\Request $request) {
  $to = $request->query('to', null);
  return view('phinisi.index', [
    'namaPria' => 'Aiman',
    'namaWanita' => 'Fadhillah',
    'namaTamu' => $to,
  ]);
});

// Route dashboard admin
use App\Http\Controllers\AdminController;

Route::get('/admin/phinisi', [AdminController::class, 'dashboard']);
