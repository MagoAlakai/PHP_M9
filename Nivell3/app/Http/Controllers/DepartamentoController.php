<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepartamentoController extends Controller
{
    public function index($pais){
        return 'Retorna departamentos del pais: '.$pais;
    }

    public function store($pais){
        return 'Envía departamentos del pais: '.$pais;
    }

    public function show($pais, $departamento){
        return 'Retorna el departamento: '.$departamento.', que pertenece al país: '.$pais;
    }

    public function update($pais, $departamento){
        return 'Se ha modificado el departamento: '.$departamento.', que pertenece al país: '.$pais;
    }

    public function destroy($pais, $departamento){
        return 'Se ha eliminado el departamento: '.$departamento.', que pertenece al país: '.$pais;
    }
}
