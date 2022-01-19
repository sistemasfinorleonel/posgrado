<?php

namespace App\Http\Controllers\Administrador;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Programa;
use App\Models\TipoPrograma;



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
        $tipo = TipoPrograma::pluck('nombre', 'id');

        
        return view('administrador.programas.edit', compact('programa','tipo'));
    }

    
    public function update(Request $request, Programa $programa)
    {
        
    }

    
    public function destroy(Programa $programa)
    {
        
    }
}
