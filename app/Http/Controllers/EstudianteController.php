<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
   
    public function index()
    {
        $estudiantes=Estudiante::paginate(12);
        return view('admin.estudiantes.index',compact('estudiantes'));
    
    }
 public function create()
    {
        return view('admin.estudiantes.create');    
        //
    }

    public function store(Request $request)
    {
        $datosestudiante= request()->except('_token');
  
        Estudiante::insert($datosestudiante);
        return redirect()->route('admin.estudiantes.index');   
    }
    public function show(Estudiante $estudiante)
    {
        return view('admin.estudiantes.show',compact('estudiante'));  
    }

    public function edit(Estudiante $estudiante)
    {
        return view('admin.estudiantes.edit',compact('estudiante'));
    
    }
    public function update(Request $request, Estudiante $estudiante)
    {
        $datosestudiante= request()->except(['_token','_method']);
        Estudiante::where('id','=',$estudiante->id)->update($datosestudiante);
        return redirect()->route('admin.estudiantes.index');
        }
    public function destroy(Estudiante $estudiante)
    {
        $estudiante->delete();
        return redirect()->route('admin.estudiantes.index');
    }
}
