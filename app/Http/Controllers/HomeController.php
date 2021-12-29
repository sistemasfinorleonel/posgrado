<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Programa;

class HomeController extends Controller
{
    public function __invoke(){

        $programa = Programa::all()->take(12);
        
        return view('welcome', compact('programa'));
    }
}
