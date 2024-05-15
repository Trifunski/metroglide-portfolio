<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insertOrIgnore([
            ['category_name' => 'Niño', 'category_description' => 'Ropa para niños', 'category_slug' => 'nino'],
            ['category_name' => 'Niña', 'category_description' => 'Ropa para niñas', 'category_slug' => 'nina'],
            ['category_name' => 'Hombre', 'category_description' => 'Ropa para hombres', 'category_slug' => 'hombre'],
            ['category_name' => 'Mujer', 'category_description' => 'Ropa para mujeres', 'category_slug' => 'mujer']
        ]);
    }
}
