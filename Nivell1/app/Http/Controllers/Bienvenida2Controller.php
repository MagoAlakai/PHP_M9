<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Bienvenida2Controller extends Controller
{
    // Para usar con interpolación
    public function index(){
        $b2 = 'Bienvenida 2';
        return view('bienvenida2', array(
            'b2' => $b2
        ));
    }
}
