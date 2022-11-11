<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;
    protected $table= 'personas';
    protected $fillable= [
        'id_equipo',
        'name',
        'apellido',
        'rol',
        'ci',
        'genero',
        'fechaNac',
        'pais',

    ];
}
