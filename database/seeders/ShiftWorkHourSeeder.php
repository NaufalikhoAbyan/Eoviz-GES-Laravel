<?php

namespace Database\Seeders;

use App\Models\ShiftWorkHour;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ShiftWorkHourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 6; $i++) {
            ShiftWorkHour::factory()->create([
                'code' => $i
            ]);
        }
    }
}
