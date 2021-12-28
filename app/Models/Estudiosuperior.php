<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstudioSuperior extends Model
{
    use HasFactory;
    public function docente(){
        return $this->belongsTo('App\Models\Docente');
          }
}
