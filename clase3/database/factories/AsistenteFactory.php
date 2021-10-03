<?php

namespace Database\Factories;

use App\Models\Asistente;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class AsistenteFactory extends Factory
{
    protected $model = Asistente::class;

    public function definition()
    {
        return [
			'nombre' => $this->faker->name,
			'apellido' => $this->faker->name,
			'ci' => $this->faker->name,
			'correo' => $this->faker->name,
			'telefono' => $this->faker->name,
        ];
    }
}
