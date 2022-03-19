<?php

namespace App\Http\Controllers;

use App\Models\Modulo;
use Illuminate\Http\Request;
use Livewire\WithPagination;

class ModuloController extends Controller
{ public function mostrar(){
    return view('pages.modulo');
}
}