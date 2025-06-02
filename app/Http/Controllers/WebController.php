<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class WebController extends Controller
{

  public function beranda(): View
  {
    return view('pages.beranda.index');
  }
  public function tentangKami(): View
  {
    return view('pages.tentangKami.index');
  }
}
