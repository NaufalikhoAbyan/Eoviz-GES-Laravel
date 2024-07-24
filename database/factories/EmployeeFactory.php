<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'fullname' => fake()->name(),
            'personal_id' => fake()->numberBetween(1, 100),
            'presence_number' => fake()->numberBetween(1, 100),
            'place_of_birth' => fake()->country(),
            'date_of_birth' => fake()->date(),
            'gender' => fake()->randomElement(['Male', 'Female']),
            'blood_type_id' => 1,
            'religion_id' => 1,
            'nationality' => fake()->country(),
            'join_date' => fake()->date(),
            'work_hour_id' => 1,
            'employee_type_id' => 1,
            'effective_type_start_date' => fake()->date(),
            'effective_type_end_date' => fake()->date(),
            'employee_status_id' => 1,
            'effective_status_start_date' => fake()->date(),
            'effective_status_end_date' => fake()->date(),
            'structural_position_type_id' => 1,
            'effective_structural_pos_start_date' => fake()->date(),
            'effective_structural_pos_end_date' => fake()->date(),
            'functional_position_type_id' => 1,
            'effective_functional_pos_start_date' => fake()->date(),
            'effective_functional_pos_end_date' => fake()->date(),
            'grade_type_id' => 1,
            'effective_grade_start_date' => fake()->date(),
            'effective_grade_end_date' => fake()->date(),
            'marital_status_id' => 1,
            'marital_code_id' => 1,
            'marital_code_tax_id' => 1,
            'effective_marital_start_date' => fake()->date(),
            'effective_marital_end_date' => fake()->date(),
            'shift_group_id' => 1,
            'shift_work_hour_id' => 1,
            'effective_group_shift_start_date' => fake()->date(),
            'effective_group_shift_end_date' => fake()->date(),
            'supervisor_id' => 1,
            'effective_supervisor_start_date' => fake()->date(),
            'effective_supervisor_end_date' => fake()->date()
        ];
    }
}
