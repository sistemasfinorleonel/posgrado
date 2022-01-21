<?php

use App\Http\Controllers\GrupoEstudianteController;
use App\Http\Controllers\GrupoHorarioController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProgramaController;
use App\Http\Controllers\ProgramaModulocontroller;
use App\Models\GrupoHorario;
use App\Models\Programa;

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

Route::get('/', HomeController::class)->name('home');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('programas',[ProgramaController::class,'index'])->name('programas.index');

Route::get('programas/{programa}', [ProgramaController::class, 'show'])->name('programas.show');


Route::get('programa-modulo',[ProgramaModulocontroller::class,'mostrar']);
Route::get('grupo-horario',[GrupoHorarioController::class,'mostrar']);
Route::get('grupo-estudiante',[GrupoEstudianteController::class,'mostrar']);




Route::get('/example',function (){
    return programas_modulos("");
});