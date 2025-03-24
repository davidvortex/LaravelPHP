<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Prueba; // Importar el modelo

class PruebaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Prueba::create([
            'nombre' => 'David Jesús',
            'apellidos' => 'Coronado',
            'edad' => 24,
            'ine' => 'si',
        ]);

        Prueba::create([
            'nombre' => 'Alejandra Ortiz',
            'apellidos' => 'Ortiz Sánchez',
            'edad' => 17,
            'ine' => 'no',
        ]);

        // Crear 10 registros aleatorios con Factory
        Prueba::factory()->count(10)->create();
    }
}
