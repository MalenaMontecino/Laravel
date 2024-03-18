<?php

namespace App\Http\Controllers;

use App\Models\Puas;
use Illuminate\Http\Request;

class PuasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('formularioPrueba');
    }

    
    public function formulario(Request $request, $coment)
    {
       $name = $request /*sacar los campos del nombre*/->input("nombre"); 
       $edad =  $request->input("edad");  

       if($name == "" ||  $edad == ""){
         $return = redirect()->action([PuasController::class, 'index'])->withInput()/*Para el old del form */;
       } else {
        $return = view('resultadoFormularioPrueba', \compact('name', 'edad', 'coment'));
       }
         
       return $return;
      
    } 

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Puas $puas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Puas $puas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Puas $puas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Puas $puas)
    {
        //
    }
}