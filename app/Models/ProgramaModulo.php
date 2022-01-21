<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramaModulo extends Model
{
    use HasFactory;
    protected $table = 'programa_modulos';
    protected $primaryKey='id';

    protected $fillable =[
            'edicion',
            'programa_id',
            'modulo_id',
    ];
    
}

