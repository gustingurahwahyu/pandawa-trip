<?php

namespace App\Http\Controllers;

use App\Models\PaketTravel;

use Illuminate\Http\Request;

class PaketController extends Controller
{
    public function index()
    {
        $pakets = PaketTravel::all();
        return view('pages.paket.index', compact('pakets'));
    }

    public function show($id)
    {
        $paket = PaketTravel::findOrFail($id);
        return view('pages.paketDetail.index.', compact('paket'));
    }
}
