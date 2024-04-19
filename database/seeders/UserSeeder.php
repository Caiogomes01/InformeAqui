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
            'name' => 'Caio Gomes - Admin',
            'email' => 'caio@adm.com.br',
            'password' => Hash::make('123456789'),
            'role' => 'admin',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('users')->insert([
            'name' => 'Caio Normal',
            'email' => 'caio@normal.com.br',
            'password' => Hash::make('123456789'),
            'role' => 'normal',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

    }
}
