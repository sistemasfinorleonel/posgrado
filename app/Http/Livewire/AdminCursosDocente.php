<?php

namespace App\Http\Livewire;

use App\Models\Curso;
use App\Models\Docente;
use Livewire\Component;
use Livewire\WithPagination;
class AdminCursosDocente extends Component
{
    public function render()
    {   $cursos=Curso::paginate();
  
        return view('livewire.admin-cursos-docente',compact('cursos'));
    }
}
