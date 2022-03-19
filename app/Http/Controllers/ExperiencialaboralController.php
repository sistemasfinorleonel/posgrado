<?php

namespace App\Http\Controllers;

use App\Models\Experiencialaboral;
use Illuminate\Http\Request;

class ExperiencialaboralController extends Controller
{
    public function index()
    {        $experiencias=Experiencialaboral::paginate(8);
        return view('admin.experiencias.index',compact('experiencias'));

        
    }
   public function create()
    {
        //
    }
    public function store(Request $request)
    {
        //
    }
    public function show(Experiencialaboral $experiencialaboral)
    {
        //
    }
    public function edit(Experiencialaboral $experiencialaboral)
    {
        //
    }
    public function update(Request $request, Experiencialaboral $experiencialaboral)
    {
        //
    }
    public function destroy(Experiencialaboral $experiencialaboral)
    {
        //
    }
}
