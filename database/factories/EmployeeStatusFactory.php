<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\EmployeeStatus>
 */
class EmployeeStatusFactory extends Factory
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
            'is_active' => fake()->boolean(75),
            'order' => fake()->numberBetween(1, 100),
            'status' => fake()->randomElement(['Active', 'Not Active']),
            'description' => fake()->paragraph()
        ];
    }
}
