<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('brands')->insertOrIgnore([
            ['brand_name' => 'Nike', 'brand_slug' => 'nike', 'brand_description' => 'Just Do It'],
            ['brand_name' => 'Adidas', 'brand_slug' => 'adidas', 'brand_description' => 'Impossible is Nothing'],
            ['brand_name' => 'Puma', 'brand_slug' => 'puma', 'brand_description' => 'Forever Faster'],
            ['brand_name' => 'Reebok', 'brand_slug' => 'reebok', 'brand_description' => 'Be More Human'],
        ]);
    }
}
