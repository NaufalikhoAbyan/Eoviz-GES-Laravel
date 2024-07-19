<?php

namespace Database\Seeders;

use App\Models\ShiftGroup;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ShiftGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i = 1; $i < 6; $i++) {
            ShiftGroup::factory()->create([
                'code' => $i,
                'order' => $i
            ]);
        }
    }
}
