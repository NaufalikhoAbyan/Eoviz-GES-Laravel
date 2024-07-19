<?php

namespace Database\Seeders;

use App\Models\FunctionalPositionType;
use Illuminate\Database\Seeder;

class FunctionalPositionTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i < 6; $i++) {
            FunctionalPositionType::factory()->create([
                'order' => $i
            ]);
        }
    }
}
