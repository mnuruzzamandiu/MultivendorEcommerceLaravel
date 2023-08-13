<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('users')->insert([
            //admin
            [
                'name' => 'Admin',
                'userName' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('12345678'),
                'role' => 'admin',
                'status' => 'active'
            ],
            //vendor
            [
                'name' => 'seller',
                'userName' => 'seller',
                'email' => 'seller@gmail.com',
                'password' => Hash::make('12345678'),
                'role' => 'seller',
                'status' => 'active'
            ],
            //user or customer
            [
                'name' => 'user',
                'userName' => 'user',
                'email' => 'user@gmail.com',
                'password' => Hash::make('12345678'),
                'role' => 'user',
                'status' => 'active'
            ],
        ]);
    }
}
