<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asistente extends Model
{
    use HasFactory;
    protected $table='asistente';

    protected $primaryKey='ci';

    public $timestamps=true;

    protected $fillable = [
        'nombre',
        'apellidos',
        'correo',
        'celular',
        'fecha_nacimiento'
    ];

    protected $guarded = [

    ];
}
