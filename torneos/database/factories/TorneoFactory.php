<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Torneo>
 */
class TorneoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => 'Torneo ' . $this->faker->text($maxNbChars = 10),
            'fechaInicio' => $this->faker->dateTimeBetween('+1 week', '+4 week'),
            'premio1' => $this->faker->randomNumber(5, true),
            'premio2' => $this->faker->randomNumber(4, true),
            'maxParticipantes' => $this->faker->numberBetween(10, 50),
            'juego_id' => $this->faker->numberBetween(1, 10)
        ];
    }
}
