<?php

namespace App\Http\Controllers;

use App\Models\Cicle;

class CicleController extends Controller
{
    public function index()
    {
        $cicles = Cicle::all();
        return view('cicles.index', compact('cicles'));
    }
}

