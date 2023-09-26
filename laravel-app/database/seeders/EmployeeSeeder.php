<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Employee;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('employees')->insert([
        //     'created_at' => now()->toDateTimeString(),
        //     'updated_at' => now()->toDateTimeString(),
        //     'employee_name' => Str::random(10),
        //     'employee_email' => Str::random(10).'@gmail.com',
        //     'password' => Hash::make('password'),
        // ]);

        Employee::factory()->count(50)->create();
    }
}
