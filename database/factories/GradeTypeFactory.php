<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\GradeType>
 */
class GradeTypeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'level' => fake()->numberBetween(1, 100),
            'code' => fake()->numberBetween(1, 100),
            'name' => fake()->name(),
            'order' => fake()->numberBetween(1, 100),
            'status' => fake()->randomElement(['Active', 'Not Active']),
            'description' => fake()->text()
        ];
    }
}
