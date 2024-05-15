<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insertOrIgnore([
            ['name' => 'admin', 'email' => 'admin@example.com', 'password' => bcrypt('1234'), 'role' => 'admin'],
            ['name' => 'user', 'email' => 'user@example.com', 'password' => bcrypt('1234'), 'role' => 'user'],
        ]);
    }
}
