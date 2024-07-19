<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ShiftGroup>
 */
class ShiftGroupFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'code' => fake()->numberBetween(1, 100),
            'name' => fake()->name(),
            'order' => fake()->numberBetween(1, 100),
            'status' => fake()->randomElement(['Active', 'Not Active']),
            'is_follow_holiday' => fake()->boolean(),
            'description' => fake()->text()
        ];
    }
}
