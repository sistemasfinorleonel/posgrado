<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modulo extends Model
{
    use HasFactory;
    protected $guarded =['id'];
    public function programa(){
    return $this->belongsToMany('App\Models\Programa');
    }
}
