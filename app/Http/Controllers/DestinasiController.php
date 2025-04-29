<?php

namespace App\Http\Controllers;

use App\Models\Destinasi;

class DestinasiController extends Controller
{
    public function index()
    {
        $destinasis = Destinasi::all();
        return view('pages.destinasi.index', compact('destinasis'));
    }
    public function show($id)
    {
        $destinasi = Destinasi::findOrFail($id);
        return $destinasi;
    }
}
