<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExperienciaLaboral extends Model
{
    
   

    use HasFactory;
    protected $guarded =['id'];
    public function docentes(){
        return $this->belongsTo('App\Models\Docente','docente_id','id');
          }
}

