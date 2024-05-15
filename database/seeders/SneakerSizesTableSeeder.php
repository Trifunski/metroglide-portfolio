<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SneakerSizesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sneaker_sizes')->insertOrIgnore([
            ['sneaker_id' => 1, 'size_id' => 1, 'stock' => 5],
            ['sneaker_id' => 1, 'size_id' => 3, 'stock' => 12],
            ['sneaker_id' => 1, 'size_id' => 5, 'stock' => 8],
            ['sneaker_id' => 1, 'size_id' => 7, 'stock' => 4],
            ['sneaker_id' => 2, 'size_id' => 2, 'stock' => 9],
            ['sneaker_id' => 2, 'size_id' => 4, 'stock' => 7],
            ['sneaker_id' => 2, 'size_id' => 6, 'stock' => 20],
            ['sneaker_id' => 2, 'size_id' => 8, 'stock' => 15],
            ['sneaker_id' => 2, 'size_id' => 9, 'stock' => 2],
            ['sneaker_id' => 3, 'size_id' => 1, 'stock' => 6],
            ['sneaker_id' => 3, 'size_id' => 3, 'stock' => 13],
            ['sneaker_id' => 3, 'size_id' => 5, 'stock' => 18],
            ['sneaker_id' => 3, 'size_id' => 7, 'stock' => 9],
            ['sneaker_id' => 4, 'size_id' => 2, 'stock' => 14],
            ['sneaker_id' => 4, 'size_id' => 4, 'stock' => 6],
            ['sneaker_id' => 4, 'size_id' => 6, 'stock' => 28],
            ['sneaker_id' => 4, 'size_id' => 8, 'stock' => 12],
            ['sneaker_id' => 4, 'size_id' => 10, 'stock' => 7],
            ['sneaker_id' => 5, 'size_id' => 1, 'stock' => 11],
            ['sneaker_id' => 5, 'size_id' => 3, 'stock' => 22],
            ['sneaker_id' => 5, 'size_id' => 5, 'stock' => 10],
            ['sneaker_id' => 5, 'size_id' => 7, 'stock' => 8],
            ['sneaker_id' => 5, 'size_id' => 9, 'stock' => 1],
            ['sneaker_id' => 6, 'size_id' => 2, 'stock' => 7],
            ['sneaker_id' => 6, 'size_id' => 4, 'stock' => 15],
            ['sneaker_id' => 6, 'size_id' => 6, 'stock' => 27],
            ['sneaker_id' => 6, 'size_id' => 8, 'stock' => 11],
            ['sneaker_id' => 6, 'size_id' => 10, 'stock' => 5],
            ['sneaker_id' => 7, 'size_id' => 1, 'stock' => 3],
            ['sneaker_id' => 7, 'size_id' => 3, 'stock' => 16],
            ['sneaker_id' => 7, 'size_id' => 5, 'stock' => 8],
            ['sneaker_id' => 7, 'size_id' => 7, 'stock' => 9],
            ['sneaker_id' => 7, 'size_id' => 9, 'stock' => 4],
            ['sneaker_id' => 8, 'size_id' => 2, 'stock' => 6],
            ['sneaker_id' => 8, 'size_id' => 4, 'stock' => 20],
            ['sneaker_id' => 8, 'size_id' => 6, 'stock' => 22],
            ['sneaker_id' => 8, 'size_id' => 8, 'stock' => 13],
            ['sneaker_id' => 8, 'size_id' => 10, 'stock' => 2],
            ['sneaker_id' => 9, 'size_id' => 1, 'stock' => 12],
            ['sneaker_id' => 9, 'size_id' => 3, 'stock' => 18],
            ['sneaker_id' => 9, 'size_id' => 5, 'stock' => 9],
            ['sneaker_id' => 9, 'size_id' => 7, 'stock' => 4],
            ['sneaker_id' => 9, 'size_id' => 9, 'stock' => 3],
            ['sneaker_id' => 10, 'size_id' => 2, 'stock' => 8],
            ['sneaker_id' => 10, 'size_id' => 4, 'stock' => 10],
            ['sneaker_id' => 10, 'size_id' => 6, 'stock' => 21],
            ['sneaker_id' => 10, 'size_id' => 8, 'stock' => 14],
            ['sneaker_id' => 10, 'size_id' => 10, 'stock' => 6],
        ]);        
    }
}
