<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Programa;

class ProgramaController extends Controller
{
  public function index()
  {
    return view('programas.index');  
  }

  public function show(Programa $programa){
    return view('programas.show', compact('programa') );
  }

}
