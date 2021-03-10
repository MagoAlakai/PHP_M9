<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Bienvenida3Controller extends Controller
{
    // Para usar variable por path e interpolación. Añado que variable por path sea opcional y que tengo un valor por defecto
    public function index($nombre = 'profe'){
        return view('bienvenida3', array(
            'nombre' => $nombre
        ));
    }
}
