<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Juego>
 */
class JuegoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $plataformas = ['PC', 'SWITCH', 'PS5', 'XBOX'];

        return [
            'nombre' => 'Juego ' . $this->faker->text($maxNbChars = 10),
            'plataforma' => $plataformas[rand(0, 3)],
            'edadR' => $this->faker->numberBetween(5, 18),
            'nota' => $this->faker->numberBetween(1, 10)
        ];
    }
}
