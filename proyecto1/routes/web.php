<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/saludo', function(){
    $data['nombre'] = 'Isabel';
    $data['apellidos']='Montecino Martínez';
    return view('carpeta.saludo', $data);
    })->name('saludo');

Route::get('/saludo2', function(){
    $nombre = 'Malena';
    $apellidos='Montecino Martínez 2';
    return view('carpeta.saludo', compact('nombre', 'apellidos'));
    })->name('saludo2');


Route::get('/prova', function(){
return 'Això és una prova';
});

Route::get('/saludo/{nombre?}', function($nombre = null){
    return 'Hola '. $nombre;
    });

Route::get('/parametre/{n1}/{n2}', function($n1,$n2){
   $sum = $n1 + $n2;
    return 'Resultado = '. $sum;
    })-> name('suma');
    