<?php

namespace Database\Seeders;

use App\Models\EmployeeType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeeTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        EmployeeType::factory()->create([
            'order' => 1
        ]);
        EmployeeType::factory()->create([
            'order' => 2
        ]);
        EmployeeType::factory()->create([
            'order' => 3
        ]);
        EmployeeType::factory()->create([
            'order' => 4
        ]);
        EmployeeType::factory()->create([
            'order' => 5
        ]);
    }
}
