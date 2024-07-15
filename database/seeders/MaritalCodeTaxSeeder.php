<?php

namespace Database\Seeders;

use App\Models\MaritalCodeTax;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MaritalCodeTaxSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 10; $i++) {
            MaritalCodeTax::factory()->create([
                'code' => $i,
                'order' => $i
            ]);
        }
    }
}
