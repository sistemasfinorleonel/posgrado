<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GrupoHorarioController extends Controller
{
    public function mostrar(){
        return view('admin.grupo-horario.index');
    }
}
