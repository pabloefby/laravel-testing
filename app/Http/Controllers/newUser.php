<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class newUser extends Controller
{
    public function getall() {
        $alumnosList = User::all();

        return view('alumnos', compact('alumnosList'));
    }

    public function insert(Request $request)
    {
       //Validar la informacion
       $request->validate([
            'nombre' => 'required|string|max:100',
            'edad' => 'required|integer|min:1',
            'carrera' => 'required|string|max:10',
        ]);

        User::create([
            'nombre' => $request->nombre,
            'edad' => $request->edad,
            'carrera' => $request->carrera,
            'estado' => '0',
        ]);


        // Redirect or return a response
        return redirect()->route('alumnos')->with('success', 'Usuario registrado exitosamente!');
    }
}
