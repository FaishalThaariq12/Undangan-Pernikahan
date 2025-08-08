<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rsvp;

class AdminController extends Controller
{
  public function dashboard()
  {
    $rsvps = Rsvp::orderBy('created_at', 'desc')->get();
    $tamus = \App\Models\Tamu::orderBy('created_at', 'desc')->get();
    return view('phinisi.dashboard', compact('rsvps', 'tamus'));
  }
}
