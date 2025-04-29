<?php

namespace App\Http\Controllers;

use App\Models\PaketTravel;

use Illuminate\Http\Request;

class PaketController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search'); // Ambil parameter pencarian dari request

        // Jika ada parameter pencarian, filter data berdasarkan nama atau atribut lain
        $pakets = PaketTravel::when($search, function ($query, $search) {
            return $query->where('nama', 'like', '%' . $search . '%');
        })->get();

        return view('pages.paket.index', compact('pakets', 'search'));
    }

    public function show()
    {
        // $paket = PaketTravel::findOrFail($id);
        // return view('pages.paketDetail.index', compact('paket'));
        return view('pages.paketDetail.index');
    }
}
