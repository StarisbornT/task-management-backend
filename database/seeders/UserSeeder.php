<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                "name" => "Admin User",
                'email' => 'admin@email.com',
                'role' => 'admin',
                'password' => Hash::make('password')
            ],
            [
                "name" => "Project Manager",
                'email' => 'manager@email.com',
                'role' => 'project_manager',
                'password' => Hash::make('password')
            ],
            [
                "name" => "Team Lead",
                'email' => 'teamlead@email.com',
                'role' => 'team_lead',
                'password' => Hash::make('password')
            ],
            [
                "name" => "Worker",
                'email' => 'worker@email.com',
                'role' => 'worker',
                'password' => Hash::make('password')
            ]
        ]);
    }
}
