<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/bienvenida1', function () {
    return view('bienvenida1');
});

Route::get('/bienvenida2', function () { // Para usar con interpolación
    $b2 = 'Bienvenida 2';
    return view('bienvenida2', array(
        'b2' => $b2
    ));
});

Route::get('/bienvenida3/{nombre?}', function ($nombre = 'profe') { // Para usar variable por path e interpolación. Añado que variable por path sea opcional y que tengo un valor por defecto
    return view('bienvenida3', array(
        'nombre' => $nombre
    ));
});
