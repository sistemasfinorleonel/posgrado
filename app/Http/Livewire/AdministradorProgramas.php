<?php

namespace App\Http\Livewire;

use App\Models\Programa;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination; 

class AdministradorProgramas extends Component
{
    use WithPagination;
    public function render()
    {// $programas =Programa::where('user_id',auth()->user()->id)->paginate(8);
       // return view('livewire.administrador-programas',compact('programas'));
   $programas=Programa::paginate(8);
   return view('livewire.administrador-programas',compact('programas'));
    }
}
