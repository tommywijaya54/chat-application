<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Role::create(['role' => 'Admin']);
        Role::create(['role' => 'Advisor']);
        Role::create(['role' => 'Teacher']);
        Role::create(['role' => 'Parent']);
        Role::create(['role' => 'Student']);
        Role::create(['role' => 'Employee']);

        Role::create(['role' => 'Online User']);
        Role::create(['role' => 'Manager']);
    }
}
