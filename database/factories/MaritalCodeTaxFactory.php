<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MaritalCodeTax>
 */
class MaritalCodeTaxFactory extends Factory
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
            'description' => fake()->text()
        ];
    }
}
