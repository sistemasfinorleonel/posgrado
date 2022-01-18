<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\AdministradorProgramas;

Route::redirect('', 'administrador/programas');
Route::get('programas', AdministradorProgramas::class)->middleware('can:Leer cursos')->name('programas.index');