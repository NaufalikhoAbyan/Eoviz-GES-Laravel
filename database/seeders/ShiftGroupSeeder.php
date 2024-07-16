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
        ShiftGroup::factory(5)->create();
    }
}
