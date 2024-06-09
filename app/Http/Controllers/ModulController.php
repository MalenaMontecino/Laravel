<?php

namespace App\Http\Controllers;

use App\Models\Modul;

class ModulController extends Controller
{
    public function index()
    {
        $moduls = Modul::with('cicle')->get();
        return view('Moduls.moduls', compact('moduls'));
    }
}

