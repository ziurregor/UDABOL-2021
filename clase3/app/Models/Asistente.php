<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asistente extends Model
{
    use HasFactory;
    protected $table='asistente';

    protected $primaryKey='ci';

    public $timestamps=false;

    protected $fillable = [
        'nombre',
        'apellidos',
        'correo',
        'celular',
        'condicion'
    ];

    protected $guarded = [

    ];
}
