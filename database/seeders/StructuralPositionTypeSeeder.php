<?php

namespace Database\Seeders;

use App\Models\StructuralPositionType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StructuralPositionTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i < 6; $i++) {
            StructuralPositionType::factory()->create([
                'order' => $i
            ]);
        }
    }
}
