<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tamu;

class TamuController extends Controller
{
  public function store(Request $request)
  {
    $request->validate([
      'nama' => 'required',
      'wa' => 'required',
    ]);
    Tamu::create($request->only('nama', 'wa'));
    return redirect()->back();
  }
  public function destroy($id)
  {
    Tamu::destroy($id);
    return redirect()->back();
  }
}
