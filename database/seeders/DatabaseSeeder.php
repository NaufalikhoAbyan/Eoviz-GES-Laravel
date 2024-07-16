<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Database\Seeders\ShiftGroupSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $this->call([
            BloodTypeSeeder::class,
            ShiftGroupSeeder::class,
            ShiftWorkHourSeeder::class,
            ReligionSeeder::class,
            EmployeeTypeSeeder::class,
            EmployeeStatusSeeder::class,
            SupervisorSeeder::class,
            MaritalCodeTaxSeeder::class,
            WorkHourSeeder::class,
            MaritalStatusSeeder::class,
            GradeTypeSeeder::class
        ]);
    }
}
