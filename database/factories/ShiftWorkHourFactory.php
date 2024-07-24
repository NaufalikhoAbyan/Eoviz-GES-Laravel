<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ShiftWorkHour>
 */
class ShiftWorkHourFactory extends Factory
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
            'begin_log' => fake()->dateTime(),
            'end_log' => fake()->dateTime(),
            'start' => fake()->dateTime(),
            'end' => fake()->dateTime(),
            'start_tolerance' => fake()->numberBetween(1, 100),
            'end_tolerance' => fake()->numberBetween(1, 100),
            'break_start' => fake()->dateTime(),
            'break_end' => fake()->dateTime(),
            'cross_day' => fake()->randomElement(['Yes', 'No']),
            'overtime_type' => fake()->randomElement(['Request', 'Automatic']),
            'status' => fake()->randomElement(['Active', 'Not Active']),
            'description' => fake()->text()
        ];
    }
}
