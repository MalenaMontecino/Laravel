<?php

namespace App\Http\Controllers;

use App\Models\Usuari;
use Illuminate\Http\Request;

class UsuariController extends Controller
{
    public function index()
    {
        $usuaris = Usuari::all();
        return view('usuaris.usuaris', compact('usuaris'));
    }

    //crear
    public function create()
    {
        return view('usuaris.create');
    }
    
    public function store(Request $request)
    {
        $data = $request->all();
        $data['contrasenya'] = bcrypt($request->contrasenya); // Encripta la contraseña antes de almacenarla
        Usuari::create($data);
        return redirect()->route('usuaris.index')->with('success', 'Usuario creado exitosamente');
    }
    
     //editar
    public function edit(Usuari $usuari)
    {
        return view('usuaris.edit', compact('usuari'));
    }
    

    public function update(Request $request, Usuari $usuari)
    {
        $usuari->update($request->all());
        return redirect()->route('usuaris.index')->with('success', 'Usuario actualizado exitosamente');
    }
    

    public function destroy(Usuari $usuari)
    {
        //mirar esto
        if ($usuari->alumnesHasCriterisAvaluacio()->exists()) {
            $usuari->update(['actiu' => 0]); // Desactiva el usuario
            return redirect()->route('usuaris.index')->with('warning', 'No se puede eliminar el usuario ya que tiene datos relacionados. Se ha desactivado en su lugar.');
        } else {
            $usuari->delete(); // Elimina el usuario
            return redirect()->route('usuaris.index')->with('success', 'Usuario eliminado exitosamente.');
        }
    }
    
    
}


