<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Moto;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comentario>
 */
class ComentarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $userIds = User::pluck('id');
        $motoIds = Moto::pluck('id');
        return [
            'mensaje' => $this->faker->sentence(),
            'id_user' => $this->faker->randomElement($userIds),
            'id_moto' => $this->faker->randomElement($motoIds),
        ];
    }
}
