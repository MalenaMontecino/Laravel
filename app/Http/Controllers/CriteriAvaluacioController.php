<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CriteriAvaluacio;

class CriteriAvaluacioController extends Controller
{
    public function index()
    {
        $criterios = CriteriAvaluacio::all();
        return view('criterios.criterios', compact('criterios'));
    }
}
