<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Administrador\ProgramaController;


Route::redirect('', 'administrador/programas');
Route::resource('programas', ProgramaController::class)->names('programas');