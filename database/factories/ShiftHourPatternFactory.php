<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ShiftHourPattern>
 */
class ShiftHourPatternFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'shift_work_hour_id' => fake()->numberBetween(1, 100),
            'is_short_day' => fake()->boolean(),
            'shift_group_id' => fake()->numberBetween(1, 100),
        ];
    }
}
