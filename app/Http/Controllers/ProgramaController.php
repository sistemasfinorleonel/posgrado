<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramaController extends Controller
{
 public function index()
 {
   return view('programas.index');  
 }
}
