<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GrupoEstudianteController extends Controller
{
    public function mostrar(){
        return view('admin.grupo-estudiante.index');
    }
}
