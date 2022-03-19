<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{public function mostrar()
    {
        return view('pages.estudiante');
    }
   }
