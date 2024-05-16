<?php

namespace App\Http\Controllers;
use App\Models\Evento;
use Illuminate\Http\Request;

class EventoController extends Controller
{
    public function inicio()
    {
        $eventos = Evento::all();
        return view('inicio', ['eventos' => $eventos]);
    }

    public function crear()
    {
        return view('crear');
    }

    public function store(Request $request)
    {
        $evento = new Evento;
        $evento->nombre = $request->nombre;
        $evento->ubicacion = $request->ubicacion;
        $evento->date = $request->date;
        $evento->save();

        return redirect()->route('eventos.inicio');
    }
}


