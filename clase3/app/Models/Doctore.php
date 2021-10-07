<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Doctore
 *
 * @property $id
 * @property $nombres
 * @property $apellidos
 * @property $celular
 * @property $email
 * @property $direccion
 * @property $especialidad
 * @property $matricula
 * @property $observacion
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Doctore extends Model
{
    
    static $rules = [
		'nombres' => 'required',
		'apellidos' => 'required',
		'celular' => 'required',
		'email' => 'required',
		'direccion' => 'required',
		'especialidad' => 'required',
		'matricula' => 'required',
		'observacion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombres','apellidos','celular','email','direccion','especialidad','matricula','observacion'];



}
