<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramaModulocontroller extends Controller
{
    public function mostrar(){
        return view('admin.programa-modulo.index');
    }
}
