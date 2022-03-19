<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index()
    {
        $cursos=Curso::paginate(8);
       // return $cursos;
        return view('admin.cursos.index',compact('cursos'));
    }
    public function create()
    {
        return view('admin.cursos.create');
    }
    public function store(Request $request)
    {
        
    }
    public function show(Curso $curso)
    {
        //
    }
    public function edit(Curso $curso)
    {
        //
    }
    public function update(Request $request, Curso $curso)
    {
        //
    }
    public function destroy(Curso $curso)
    {
        //
    }
}
