<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Curso>
 */
class CursoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => fake()->name,
            'codigo' => 'C-' . Str::padLeft(fake()->numberBetween(1, 100), 3, '0'),
            'descripcion' => fake()->sentence,
            'fecha_inicio' => fake()->date,
        ];
    }
}
