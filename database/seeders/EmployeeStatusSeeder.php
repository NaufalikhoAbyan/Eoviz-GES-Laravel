<?php

namespace Database\Seeders;

use App\Models\EmployeeStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeeStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        EmployeeStatus::factory()->create([
            'order' => 1
        ]);
        EmployeeStatus::factory()->create([
            'order' => 2
        ]);
        EmployeeStatus::factory()->create([
            'order' => 3
        ]);
        EmployeeStatus::factory()->create([
            'order' => 4
        ]);
        EmployeeStatus::factory()->create([
            'order' => 5
        ]);
    }
}
