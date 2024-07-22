<?php

namespace Database\Seeders;

use App\Models\Supervisor;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SupervisorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Supervisor::factory()->create([
            'phone' => 1,
            'mobile' => 1,
        ]);
        Supervisor::factory()->create([
            'phone' => 2,
            'mobile' => 2,
        ]);
        Supervisor::factory()->create([
            'phone' => 3,
            'mobile' => 3,
        ]);
    }
}
