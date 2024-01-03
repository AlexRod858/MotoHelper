<?php

namespace Database\Factories;
use App\Models\Problema;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Solucion>
 */
class SolucionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $problemaIds = Problema::pluck('id');
        return [
            'descripcion' => $this->faker->realText(),
            'id_problema' => $this->faker->randomElement($problemaIds),
        ];
    }
}
