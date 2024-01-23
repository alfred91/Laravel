<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Empleado>
 */
class EmpleadoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->name,
            'email' => $this->faker->email,
            'dni' => $this->faker->dni,
            'telefono' =>  $this->faker->phoneNumber,
            'salario' => $this->faker->randomFloat($nbMaxDecimals = null, $min = 0, $max = null)
        ];
    }
}
