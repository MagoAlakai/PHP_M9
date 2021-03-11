<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaisController extends Controller
{
    public function index(){
        return 'Retorna paises';
    }

    public function store(){
        return 'Envía paises';
    }

    public function show($pais){
        return 'Retorna el pais: '.$pais;
    }

    public function update($pais){
        return 'Se ha modificado el país: '.$pais;
    }

    public function destroy($pais){
        return 'Se ha eliminado el país: '.$pais;
    }
}
