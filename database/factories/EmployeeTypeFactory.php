<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\EmployeeType>
 */
class EmployeeTypeFactory extends Factory
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
            'is_permanent' => fake()->boolean(75),
            'order' => fake()->unique()->numberBetween(1),
            'status' => fake()->randomElement(['Active', 'Not Active'])
        ];
    }
}
