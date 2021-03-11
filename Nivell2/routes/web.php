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

Route::get('/api/user', function () {
    return 'Welcome desde Api/User';
});

//Routes del PaisesController
Route::get('/paises', 'PaisController@index');
Route::post('/paises', 'PaisController@store');
Route::get('/paises/{pais}', 'PaisController@show', function($pais){
    return (array(
        'pais' => $pais
    ));
});
Route::put('/paises/{pais}', 'PaisController@update', function($pais){
    return (array(
        'pais' => $pais
    ));
});
Route::delete('/paises/{pais}', 'PaisController@destroy', function($pais){
    return (array(
        'pais' => $pais
    ));
});

//Routes del DepartamentoController
Route::get('/paises/{pais}/departamentos', 'DepartamentoController@index', function($pais){
    return (array(
        'pais' => $pais
    ));
});

Route::post('/paises/{pais}/departamentos', 'DepartamentoController@store', function($pais){
    return (array(
        'pais' => $pais
    ));
});

Route::get('/paises/{pais}/departamentos/{departamento}', 'DepartamentoController@show', function($pais, $departamento){
    return (array(
        'pais' => $pais,
        'departamento' => $departamento
    ));
});

Route::put('/paises/{pais}/departamentos/{departamento}', 'DepartamentoController@update', function($pais, $departamento){
    return (array(
        'pais' => $pais,
        'departamento' => $departamento
    ));
});

Route::delete('/paises/{pais}/departamentos/{departamento}', 'DepartamentoController@destroy', function($pais, $departamento){
    return (array(
        'pais' => $pais,
        'departamento' => $departamento
    ));
});



