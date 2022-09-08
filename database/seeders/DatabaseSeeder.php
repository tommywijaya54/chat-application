<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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

        User::factory()->create([
            'name' => 'Tommy Wijaya',
            'email' => 'tommy.wijaya54@yahoo.com',
            'password' => '$2y$10$hsmt/x1n9vBU4IWeTQLML.qaooBdrIpbu6vg1gozpfDir2yO2ZkOe'
        ]);
    }
}
