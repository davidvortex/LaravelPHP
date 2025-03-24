<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Prueba; // Importar el modelo

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Prueba>
 */
class PruebaFactory extends Factory
{
    protected $model = Prueba::class;

    public function definition(): array
    {
        return [
            'nombre' => $this->faker->firstName,
            'apellidos' => $this->faker->lastName,
            'edad' => $this->faker->numberBetween(18, 60),
            'ine' => $this->faker->randomElement(['si', 'no']),
        ];
    }
}
