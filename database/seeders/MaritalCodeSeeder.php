<?php

namespace Database\Seeders;

use App\Models\MaritalCode;
use Illuminate\Database\Seeder;

class MaritalCodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MaritalCode::factory()->create([
            'code' => 1
        ]);
        MaritalCode::factory()->create([
            'code' => 2
        ]);
        MaritalCode::factory()->create([
            'code' => 3,
            'marital_status_id' => 2
        ]);
    }
}
