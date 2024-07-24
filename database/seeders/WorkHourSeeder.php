<?php

namespace Database\Seeders;

use App\Models\WorkHour;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class WorkHourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        WorkHour::factory(5)->create();
    }
}
