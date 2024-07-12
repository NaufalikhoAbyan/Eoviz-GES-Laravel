<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\WorkHour>
 */
class WorkHourFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'hour' => fake()->numberBetween(1, 24),
            'holiday' => fake()->text(),
            'status' => fake()->randomElement(['Active','Not Active']),
            'description' => fake()->text(),
            'is_locked' => fake()->boolean(75)
        ];
    }
}
