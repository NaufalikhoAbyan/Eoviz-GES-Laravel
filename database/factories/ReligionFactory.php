<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Religion>
 */
class ReligionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=> fake()->unique()->randomElement(['Islam','Kristen','Hindu','Budha','Kong Hu Chu','Kristen Katolik','Kristen Protestan']),
            'status'  => fake()->randomElement(['Active','Not Active']),
            'description' => fake()->text(),
        ];
    }
}
