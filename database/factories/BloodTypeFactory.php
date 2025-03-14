<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BloodType>
 */
class BloodTypeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=> fake()->unique()->bloodType(),
            'status'  => fake()->randomElement(['Active','Not Active']),
            'description' => fake()->text()
        ];
    }
}
