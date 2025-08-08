<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rsvp;

class RsvpController extends Controller
{
  public function store(Request $request)
  {
    $request->validate([
      'nama' => 'required',
      'kehadiran' => 'required',
      'ucapan' => 'required',
    ]);
    Rsvp::create($request->only(['nama', 'kehadiran', 'ucapan']));
    return redirect()->back()->with('success', 'Ucapan berhasil dikirim!');
  }

  public function index()
  {
    return Rsvp::orderBy('created_at', 'desc')->get();
  }
}
