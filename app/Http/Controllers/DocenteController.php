<?php

namespace App\Http\Controllers;
use App\Models\Docente;
use Illuminate\Http\Request;

class DocenteController extends Controller
{ public function mostrar(){
    return view('pages.docente');
}
}
