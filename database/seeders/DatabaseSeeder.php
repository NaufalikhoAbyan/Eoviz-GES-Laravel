<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

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
            FunctionalPositionTypeSeeder::class,
            StructuralPositionTypeSeeder::class,
            MaritalStatusSeeder::class,
            MaritalCodeSeeder::class,
            BloodTypeSeeder::class,
            ShiftGroupSeeder::class,
            ShiftWorkHourSeeder::class,
            ShiftHourPatternSeeder::class,
            ReligionSeeder::class,
            EmployeeTypeSeeder::class,
            EmployeeStatusSeeder::class,
            SupervisorSeeder::class,
            MaritalCodeTaxSeeder::class,
            WorkHourSeeder::class,
            GradeTypeSeeder::class,
            EmployeeSeeder::class
        ]);
    }
}
