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
            return $query->where('name', 'like', '%' . $search . '%');
        })
            ->when($sort, function ($query, $sort) {
                if ($sort === 'name') {
                    return $query->orderBy('name');
                } elseif ($sort === 'price') {
                    return $query->orderBy('price');
                }
            })
            ->get();

        return view('pages.paket.index', compact('pakets', 'search', 'sort'));
    }

    public function show($id)
    {
        $paket = PaketTravel::with('destinasis')->findOrFail($id);

        return view('pages.PDetail.index', compact('paket'));
    }
}
