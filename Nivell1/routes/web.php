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

Route::get('/bienvenida1', 'Bienvenida1Controller@index');

Route::get('/bienvenida2', 'Bienvenida2Controller@index');

Route::get('/bienvenida3/{nombre?}', 'Bienvenida3Controller@index');
