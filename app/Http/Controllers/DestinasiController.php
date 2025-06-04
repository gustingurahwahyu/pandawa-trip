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
        $sort = $request->input('sort');

        $destinasis = Destinasi::when($search, function ($query, $search) {
            return $query->where('name', 'like', '%' . $search . '%');
        })
            ->when($sort, function ($query, $sort) {
                if ($sort === 'name') {
                    return $query->orderBy('name');
                } elseif ($sort === 'price') {
                    return $query->orderBy('price');
                }
            })
            ->paginate(12);


        return view('pages.destinasi.index', compact('destinasis', 'search', 'sort'));
    }

    public function show($id)
    {
        $destinasi = Destinasi::findOrFail($id);
        return $destinasi;
    }
    public function like($id)
    {
        $destinasi = Destinasi::findOrFail($id);
        $destinasi->increment('likes');
        return response()->json(['likes' => $destinasi->likes]);
    }
}
