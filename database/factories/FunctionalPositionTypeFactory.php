<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\FunctionalPositionType>
 */
class FunctionalPositionTypeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'functional_position_type_id' => null,
            'code' => fake()->randomDigit(),
            'name' => fake()->name(),
            'order' => fake()->numberBetween(1, 100),
            'status' => fake()->randomElement(['Active', 'Not Active']),
            'description' => fake()->text()
        ];
    }
}
