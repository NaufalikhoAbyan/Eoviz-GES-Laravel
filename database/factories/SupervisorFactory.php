<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Supervisor>
 */
class SupervisorFactory extends Factory
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
            'street' => fake()->text(),
            'country' => fake()->country(),
            'state' => fake()->state(),
            'city' => fake()->city(),
            'postal_code' => fake()->numberBetween(1, 100),
            'phone' => fake()->numberBetween(1, 100),
            'mobile' => fake()->numberBetween(1, 100),
            'email' => fake()->email(1, 100),
            'status' => fake()->randomElement(['Active', 'Not Active']),
            'description' => fake()->text()
        ];
    }
}
