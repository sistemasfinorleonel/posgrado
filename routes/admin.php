<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\DocenteController;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\InscripcionController;

Route::get('', [HomeController::class, 'index'])->middleware('can:Ver dashboard')->name('home');
Route::resource('roles',RoleController::class)->names('roles');
Route::resource('users',UserController::class)->names('users');
Route::resource('docentes',DocenteController::class)->names('docentes');
Route::resource('cursos',CursoController::class)->names('cursos');
Route::resource('experiencias',CursoController::class)->names('experiencias');
Route::resource('estudios',CursoController::class)->names('estudios');
Route::resource('estudiantes',EstudianteController::class)->names('estudiantes');
Route::resource('inscripcions',InscripcionController::class)->names('inscripcions');