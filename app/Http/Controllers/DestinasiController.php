<?php

namespace App\Http\Controllers;

use App\Models\Destinasi;
use
    Illuminate\Http\Request;

class DestinasiController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        // Eager load relasi 'paketTravel' (ganti sesuai relasi yang ada di model Destinasi)
        $destinasis = Destinasi::with('paketTravel')
            ->when($search, function ($query, $search) {
                return $query->where('nama', 'like', '%' . $search . '%');
            })
            ->get();

        return view('pages.destinasi.index', compact('destinasis'));
    }

    public function show($id)
    {
        // Eager load relasi juga di sini
        $destinasi = Destinasi::with('paketTravel')->findOrFail($id);
        return $destinasi;
    }
}
