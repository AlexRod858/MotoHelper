<?php

namespace Database\Factories;
use App\Models\Moto;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Problema>
 */
class ProblemaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $motoIds = Moto::pluck('id');
        return [
            'descripcion' => $this->faker->realText(),
            'id_moto' => $this->faker->randomElement($motoIds),
        ];
    }
}
