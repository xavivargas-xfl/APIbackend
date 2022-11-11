<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    use HasFactory;
    protected $table= 'equipos';
    protected $primaryKey='id_equipo';
    public $incrementing=false;
    protected $keyType='string';
    protected $fillable= [
        'id_equipo',
        'id_campeonato',
        'nombre',
        'pais',

    ];

}
