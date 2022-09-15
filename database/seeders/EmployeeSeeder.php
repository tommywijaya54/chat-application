<?php

namespace Database\Seeders;

use App\Models\Employee;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $role = Role::all();
        Employee::factory()->count(20)->create()->each(function (Employee $employee) use ($role) {
            $employee->update(['role' => $role->random()->role]);
        });
    }
}
