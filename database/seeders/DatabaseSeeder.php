<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Role::factory()->create([
            'role' => 'Admin'
        ]);
        Role::factory()->create([
            'role' => 'Manager'
        ]);
        Role::factory()->create([
            'role' => 'User'
        ]);

        User::factory()->create([
            'name' => 'Tommy Wijaya',
            'email' => 'tommy.wijaya54@yahoo.com',
            'password' => '$2y$10$hsmt/x1n9vBU4IWeTQLML.qaooBdrIpbu6vg1gozpfDir2yO2ZkOe',
            'role' => 'Admin'
        ]);
        
        User::factory()->create([
            'name' => 'One',
            'email' => 'one@email.com',
            'password' => '$2y$10$hsmt/x1n9vBU4IWeTQLML.qaooBdrIpbu6vg1gozpfDir2yO2ZkOe',
            'role' => 'Manager'
        ]);

        User::factory()->create([
            'name' => 'Two',
            'email' => 'two@email.com',
            'password' => '$2y$10$hsmt/x1n9vBU4IWeTQLML.qaooBdrIpbu6vg1gozpfDir2yO2ZkOe',
            'role' => 'Manager'
        ]);

        User::factory()->create([
            'name' => 'Satu',
            'email' => 'satu@email.com',
            'password' => '$2y$10$hsmt/x1n9vBU4IWeTQLML.qaooBdrIpbu6vg1gozpfDir2yO2ZkOe',
            'role' => 'User'
        ]);
        User::factory()->create([
            'name' => 'Dua',
            'email' => 'dua@email.com',
            'password' => '$2y$10$hsmt/x1n9vBU4IWeTQLML.qaooBdrIpbu6vg1gozpfDir2yO2ZkOe',
            'role' => 'User'
        ]);
        User::factory()->create([
            'name' => 'Tiga',
            'email' => 'tiga@email.com',
            'password' => '$2y$10$hsmt/x1n9vBU4IWeTQLML.qaooBdrIpbu6vg1gozpfDir2yO2ZkOe',
            'role' => 'User'
        ]);
        User::factory()->create([
            'name' => 'Empat',
            'email' => 'empat@email.com',
            'password' => '$2y$10$hsmt/x1n9vBU4IWeTQLML.qaooBdrIpbu6vg1gozpfDir2yO2ZkOe',
            'role' => 'User'
        ]);
    }
}
