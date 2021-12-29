<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Programa;

class HomeController extends Controller
{
    public function __invoke(){
        $programa = Programa::all();
        
        return view('welcome', compact('programa'));
    }
}
