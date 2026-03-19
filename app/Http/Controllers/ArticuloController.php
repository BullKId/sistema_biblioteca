<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticuloController extends Controller
{
        $texto = $request->input('buscar');

        if (!$texto) {
            return redirect()->back();
        }

        $libros = Libro::where('titulo', 'LIKE', "%$texto%")
            ->orWhere('autor', 'LIKE', "%$texto%")
            ->get();

        $usuarios = User::where('name', 'LIKE', "%$texto%")
            ->get();

        return view('buscar.resultados', compact('libros', 'usuarios', 'texto'));
    }
