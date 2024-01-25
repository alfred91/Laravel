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
            'nombre' => 'Torneo ' . $this->faker->text(10),
            'juego' => $this->faker->text(100),
            'fechaInicio' => $this->faker->dateTimeBetween($startDate = '+1 wee', $endDate = '+4 week'),
            'premio' => $this->faker->randomNumber(5, true),
            'premio2' => $this->faker->randomNumber(4, true),
            'maxParticipantes' => $this->faker->numberBetween(10, 50),
        ];
    }
}
