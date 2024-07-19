<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MaritalCode>
 */
class MaritalCodeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'code' => fake()->numberBetween(1,100),
            'name' => fake()->name(),
            'status' => fake()->randomElement(['Active', 'Not Active']),
            'description' => fake()->text(),
            'marital_status_id' => 1
        ];
    }
}
