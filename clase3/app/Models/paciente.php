<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class paciente extends Model
{
    protected $table = 'paciente';
    protected $primaryKey = "id_p";
    public $timestamps = true;
    const created_at = 'create_ad';
    const update_at = 'update_ad';
    protected $fillable = [
        'ci_p',
        'nombre_p',
        'apellidos_p',
        'edad_p',
        'telefono_p',
        'direccion_p',
        'departamento_p',
        'sexo_p',
        'fechanac_p',
        'correo_p',
        'created_ad',
        'updated_ad'
    ];

    public function scopeNombre($query,$nombres){
        if($nombres){
            return $query->where('nombre_p','like',"%$nombres%");
        }

    }
    public function scopeApellidos($query,$apellidos){
        if($apellidos){
            return $query->where('apellidos_p','like',"%$apellidos%");
        }

    }
    public function scopeCi($query,$ci){
        if($ci){
            return $query->where('ci_p','like',"%$ci%");
        }

    }
}
