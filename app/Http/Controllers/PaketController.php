<?php

namespace App\Http\Controllers;

use App\Models\PaketTravel;
use Illuminate\Http\Request;

class PaketController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $sort = $request->input('sort');

        $pakets = PaketTravel::when($search, function ($query, $search) {
            return $query->where('nama', 'like', '%' . $search . '%');
        })
            ->when($sort, function ($query, $sort) {
                if ($sort === 'nama') {
                    return $query->orderBy('nama');
                } elseif ($sort === 'harga') {
                    return $query->orderBy('harga');
                }
            })
            ->get();

        return view('pages.paket.index', compact('pakets', 'search', 'sort'));
    }

    public function show($id)
    {
        $paket = PaketTravel::with('destinasis')->findOrFail($id);

        return view('pages.paketDetail.index', compact('paket'));
    }
}
