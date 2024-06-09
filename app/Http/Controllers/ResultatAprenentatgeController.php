<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ResultatAprenentatge;

class ResultatAprenentatgeController extends Controller
{
    public function index()
    {
        // Obtener todos los resultados de aprendizaje
        $resultats = ResultatAprenentatge::all();
        
        // Devolver la vista con los resultados de aprendizaje
        return view('resultats.resultats', compact('resultats'));
    }
}
