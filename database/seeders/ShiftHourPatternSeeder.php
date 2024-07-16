<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ShiftHourPattern;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ShiftHourPatternSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ShiftHourPattern::factory()->create([
            'shift_work_hour_id' => 1,
            'shift_group_id' => 1
        ]);
        ShiftHourPattern::factory()->create([
            'shift_work_hour_id' => 2,
            'shift_group_id' => 2
        ]);
        ShiftHourPattern::factory()->create([
            'shift_work_hour_id' => 3,
            'shift_group_id' => 3
        ]);
    }
}
