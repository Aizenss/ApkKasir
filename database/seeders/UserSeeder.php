<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'role' => 'admin',
                'password' => bcrypt('admin'),
            ],
            [
                'name' => 'Employee',
                'email' => 'employee@gmail.com',
                'role' => 'employee',
                'password' => bcrypt('employee'),
            ]
        ];
        foreach ($user as $value) {
            User::create($value);
        }
    }
}
