<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExperienciaLaborar extends Model
{ protected $guarded =['id'];

    use HasFactory;
    public function docente(){
        return $this->belongsTo('App\Models\Docente');
          }
}
