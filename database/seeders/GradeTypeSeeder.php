<?php

namespace Database\Seeders;

use App\Models\GradeType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GradeTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 5; $i++) {
            GradeType::factory()->create([
                'level' => $i,
                'code' => (int)("00".$i),
                'order' => $i
            ]);
        }
    }
}
