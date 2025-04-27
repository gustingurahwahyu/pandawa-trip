<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class WebController extends Controller
{

  public function beranda(): View
  {
    return view('pages.beranda.index');
  }
  public function paket(): View
  {
    return view('pages.paket.index');
  }
  public function destinasi(): View
  {
    return view('pages.destinasi.index');
  }
  public function tentangKami(): View
  {
    return view('pages.tentangKami.index');
  }
}
