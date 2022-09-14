<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Tommy Wijaya',
            'email' => 'tommy.wijaya54@yahoo.com',
            'password' => '$2y$10$hsmt/x1n9vBU4IWeTQLML.qaooBdrIpbu6vg1gozpfDir2yO2ZkOe',
            'role' => 'Admin'
        ]);

        User::create([
            'name' => 'Eko Saputra Wijaya',
            'email' => 'one@email.com',
            'password' => '$2y$10$hsmt/x1n9vBU4IWeTQLML.qaooBdrIpbu6vg1gozpfDir2yO2ZkOe',
            'role' => 'Manager'
        ]);

        User::create([
            'name' => 'Dewi Puspita Sari',
            'email' => 'two@email.com',
            'password' => '$2y$10$hsmt/x1n9vBU4IWeTQLML.qaooBdrIpbu6vg1gozpfDir2yO2ZkOe',
            'role' => 'Manager'
        ]);

        User::create([
            'name' => 'Shinta Purnama Sari',
            'email' => 'satu@email.com',
            'password' => '$2y$10$hsmt/x1n9vBU4IWeTQLML.qaooBdrIpbu6vg1gozpfDir2yO2ZkOe',
            'role' => 'User'
        ]);
        User::create([
            'name' => 'Dua',
            'email' => 'dua@email.com',
            'password' => '$2y$10$hsmt/x1n9vBU4IWeTQLML.qaooBdrIpbu6vg1gozpfDir2yO2ZkOe',
            'role' => 'User'
        ]);
        User::create([
            'name' => 'Tiga',
            'email' => 'tiga@email.com',
            'password' => '$2y$10$hsmt/x1n9vBU4IWeTQLML.qaooBdrIpbu6vg1gozpfDir2yO2ZkOe',
            'role' => 'User'
        ]);
        User::create([
            'name' => 'Empat',
            'email' => 'empat@email.com',
            'password' => '$2y$10$hsmt/x1n9vBU4IWeTQLML.qaooBdrIpbu6vg1gozpfDir2yO2ZkOe',
            'role' => 'User'
        ]);
    }
}
