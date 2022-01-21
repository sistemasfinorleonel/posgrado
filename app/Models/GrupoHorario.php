<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GrupoHorario extends Model
{
    use HasFactory;
    protected $table = 'grupo_horario';
    protected $primaryKey='id';

    protected $fillable =[
        'aula',
        'grupo_id',
        'horario_id',
    ];
    
}
