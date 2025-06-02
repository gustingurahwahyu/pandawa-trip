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


        $destinasis = Destinasi::when($search, function ($query, $search) {
            return $query->where('name', 'like', '%' . $search . '%');
        })
            ->get();

        return view('pages.destinasi.index', compact('destinasis'));
    }
}
