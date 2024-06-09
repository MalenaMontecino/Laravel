<?php
use App\Http\Controllers\PuasController;
use App\Http\Controllers\SaludoController;
use App\Clases\Cicle;
use App\Clases\Curs;
use App\Http\Controllers\UsuariController;
//use Cursos\Curs;
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
//RUTA CON PLANTILLA
Route::get('/', function () {
    return view('index');
});
//RUTA CON CONTROLLERhp
// Route::get('/', [SaludoController::class,'inicio']);
Route::get('/hello',[SaludoController::class,'hello']);

//rutas de prueba
Route::get('/formularioPrueba',[PuasController::class, 'index']);
Route::post('/kiki/{coment}',[PuasController::class, 'formulario']);



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
    

Route::get('/cicles', function(){
    $Cicle1 = new Cicle( 1,'DAW','Desarrollo de aplicaciones web');
    $Cicle2 = new Cicle (2, 'DAM','Desarrollo de aplicaciones multiplataforma');
    $Cicles = array($Cicle1, $Cicle2);
    return view('Cicles.index',compact('Cicles'));
        })-> name('index1');
// Route::get('/cursos', function(){
//     $Curs1 = new Curs(1,'DAW1A','Desenvolupament Aplicacions Web de primer matí A','DAW');
//     $Curs2 = new Curs (2, 'DAM2A','Desenvolupament Aplicacions Web de segon matí A','DAW');
//     $Curs3 = new Curs (2, 'DAW2B','Desenvolupament Aplicacions Web de segon matí B','DAW');
//     $Cursos = array($Curs1,$Curs2,$Curs3);
//     return view('Cursos.index',compact('Cursos'));
//         })-> name('index1');



   

Route::get('/usuaris', [UsuariController::class, 'index'])->name('usuaris.index');
Route::get('/usuaris/create', [UsuariController::class, 'create'])->name('usuaris.create');
Route::post('/usuaris', [UsuariController::class, 'store'])->name('usuaris.store');
Route::get('/usuaris/{usuari}/edit', [UsuariController::class, 'edit'])->name('usuaris.edit');
Route::put('/usuaris/{usuari}', [UsuariController::class, 'update'])->name('usuaris.update');
Route::delete('/usuaris/{usuari}', [UsuariController::class, 'destroy'])->name('usuaris.destroy');


        use App\Http\Controllers\TipusUsuariController;

Route::get('/tipus-usuaris', [TipusUsuariController::class, 'index'])->name('tipus_usuaris');


use App\Http\Controllers\CicleController;

Route::get('/cicles', [CicleController::class, 'index'])->name('cicles');
use App\Http\Controllers\ModulController;

Route::get('/moduls', [ModulController::class, 'index'])->name('moduls');

use App\Http\Controllers\CriteriAvaluacioController;

Route::get('/criterios', [CriteriAvaluacioController::class, 'index'])->name('criterios.index');
use App\Http\Controllers\ResultatAprenentatgeController;

Route::get('/resultats-aprenentatge', [ResultatAprenentatgeController::class, 'index'])->name('resultats.index');
use Illuminate\Support\Facades\Auth;

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
