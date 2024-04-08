<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'role' => 'admin',
            'password' => Hash::make('password'),
            'phone_number' => '1234567890',
            'dob' => '1990-01-01',
            'gender' => 'male',
            'province' => 'Koshi',
            'city' => 'Kathmandu',
            'area' => 'Thamel',
        ]);

        DB::table('users')->insert([
            'name' => 'User',
            'email' => 'user@gmail.com',
            'role' => 'user',
            'password' => Hash::make('password'),
            'phone_number' => '9876543210',
            'dob' => '1995-05-05',
            'gender' => 'female',
            'province' => 'Bagmati',
            'city' => 'Pokhara',
            'area' => 'Lakeside',
        ]);

        DB::table('users')->insert([
            'name' => 'Worker',
            'email' => 'worker@gmail.com',
            'role' => 'worker',
            'password' => Hash::make('password'),
            'phone_number' => '9998887776',
            'dob' => '1985-10-10',
            'gender' => 'other',
            'province' => 'Gandaki',
            'city' => 'Chitwan',
            'area' => 'Sauraha',
            'working_field' => 'Construction',
            'experience' => '5 years',
            'citizenship_number' => '1234567890123',
            'citizenship_front' => 'citizenship_front_image.jpg',
            'citizenship_back' => 'citizenship_back_image.jpg',
        ]);
    }
}
