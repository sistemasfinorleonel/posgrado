<?php

namespace App\Http\Controllers\Administrador;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Programa;



class ProgramaController extends Controller
{
    
    public function index()
    {
        return view('administrador.programas.index');
    }

    
    public function create()
    {
        return view('administrador.programas.create');
    }

   
    public function store(Request $request)
    {
        
    }

    
    public function show(Programa $programa)
    {
        return view('administrador.programas.show', compact('programa'));
    }

    
    public function edit(Programa $programa)
    {
        return view('administrador.programas.edit', compact('programa'));
    }

    
    public function update(Request $request, Programa $programa)
    {
        
    }

    
    public function destroy(Programa $programa)
    {
        
    }
}
