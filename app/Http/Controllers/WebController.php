<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\PaketTravel;
use App\Models\Destinasi;

class WebController extends Controller
{

  public function beranda(): View
  {
    $pakets = \App\Models\PaketTravel::orderBy('created_at', 'desc')->take(10)->get();
    $destinasis = \App\Models\Destinasi::orderBy('created_at', 'desc')->take(9)->get();
    return view('pages.beranda.index', compact('pakets', 'destinasis'));
  }
  public function tentangKami(): View
  {
    return view('pages.tentangKami.index');
  }
}
