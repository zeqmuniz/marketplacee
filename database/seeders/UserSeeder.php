<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Ezequiel Muniz',
                'username' => 'mszeq',
                'role' => 'admin',
                'status' => 'active',
                'email' => 'ezequiel@startescola.com.br',
                'password' => bcrypt('password')
            ],
            [
                'name' => 'Vendedor Zeq',
                'username' => 'vendor',
                'role' => 'vendor',
                'status' => 'active',
                'email' => 'vendedor@startescola.com.br',
                'password' => bcrypt('password')
            ],
            [
                'name' => 'Cliente User',
                'username' => 'user',
                'role' => 'user',
                'status' => 'active',
                'email' => 'cliente@startescola.com.br',
                'password' => bcrypt('password')
            ]

        ]);
    }
}
