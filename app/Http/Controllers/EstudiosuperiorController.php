<?php

namespace App\Http\Controllers;

use App\Models\Estudiosuperior;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EstudiosuperiorController extends Controller
{
    
    public function index()
    {
        $estudios=Estudiosuperior::paginate(8);
         return view('admin.estudios.index',compact('estudios'));
    }
public function create()
    {
        //
    }
    public function store(Request $request)
    {
        //
    }
    public function show(Estudiosuperior $estudiosuperior)
    {
        //
    }
    public function edit(Estudiosuperior $estudiosuperior)
    {
        //
    }
    public function update(Request $request, Estudiosuperior $estudiosuperior)
    {
        //
    }
    public function destroy(Estudiosuperior $estudiosuperior)
    {
        //
    }
}
