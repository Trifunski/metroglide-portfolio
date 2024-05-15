<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SizesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sizes')->insertOrIgnore([
            ['size_value' => 36],
            ['size_value' => 37],
            ['size_value' => 38],
            ['size_value' => 39],
            ['size_value' => 40],
            ['size_value' => 41],
            ['size_value' => 42],
            ['size_value' => 43],
            ['size_value' => 44],
            ['size_value' => 45],
        ]);
    }
}
