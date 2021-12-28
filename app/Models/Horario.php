<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    use HasFactory;
    protected $guarded =['id'];
//relacion muchos a muchos
    public function grupos(){
        return $this->belongsToMany('App\Models\Grupo');
    }
}
