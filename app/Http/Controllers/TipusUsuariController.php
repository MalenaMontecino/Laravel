<?php

namespace App\Http\Controllers;

use App\Models\TipusUsuari;

class TipusUsuariController extends Controller
{
    public function index()
    {
        $tipusUsuaris = TipusUsuari::all();
        return view('tipus_usuaris.tipus_usuaris', compact('tipusUsuaris'));
    }
}
