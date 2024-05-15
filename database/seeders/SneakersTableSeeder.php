<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SneakersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sneakers')->insertOrIgnore([
            ['sneaker_name' => 'Air Force 1', 'sneaker_code' => 555088, 'sneaker_color' => 'Black/White', 'sneaker_price' => 100.00, 'sneaker_image' => 'assets/images/sneakers/air-force-one-removebg.webp', 'sneaker_description' => 'The Nike Air Force 1 is a classic sneaker that has stood the test of time. Originally released in 1982, the Air Force 1 was the first basketball shoe to feature Nike Air technology, revolutionizing the game and kick-starting a sneaker revolution. The Air Force 1 has since become a cultural icon, worn by everyone from basketball players to hip-hop artists to sneakerheads. With its clean lines, bold colors, and timeless design, the Air Force 1 is a must-have for any sneaker collection.', 'brand_id' => 1, 'category_id' => 1],
            ['sneaker_name' => 'Air Max 90', 'sneaker_code' => 325213, 'sneaker_color' => 'White/Black', 'sneaker_price' => 120.00, 'sneaker_image' => 'assets/images/sneakers/air-max-90-removebg.webp', 'sneaker_description' => 'The Nike Air Max 90 is a classic sneaker that has been a favorite of sneakerheads for decades. Originally released in 1990, the Air Max 90 was the second sneaker in the Air Max line and featured a larger Air unit than its predecessor. The Air Max 90 has since become a cultural icon, worn by everyone from athletes to musicians to fashionistas. With its bold design, vibrant colors, and comfortable fit, the Air Max 90 is a must-have for any sneaker collection.', 'brand_id' => 1, 'category_id' => 1],
            ['sneaker_name' => 'Superstar 80s', 'sneaker_code' => 677622, 'sneaker_color' => 'White/Black', 'sneaker_price' => 80.00, 'sneaker_image' => 'assets/images/sneakers/superstar-removebg.webp', 'sneaker_description' => 'The Adidas Superstar 80s is a classic sneaker that has been a favorite of sneakerheads for decades. Originally released in 1969, the Superstar was the first low-top basketball shoe to feature an all-leather upper and the iconic rubber shell toe. The Superstar has since become a cultural icon, worn by everyone from basketball players to hip-hop artists to fashionistas. With its clean lines, classic design, and timeless style, the Superstar is a must-have for any sneaker collection.', 'brand_id' => 2, 'category_id' => 1],
            ['sneaker_name' => 'Ultraboost', 'sneaker_code' => 180000, 'sneaker_color' => 'Black/White', 'sneaker_price' => 180.00, 'sneaker_image' => 'assets/images/sneakers/ultraboost-removebg.webp', 'sneaker_description' => 'High-performance running shoes', 'brand_id' => 2, 'category_id' => 1],
            ['sneaker_name' => 'Jordan 4 Retro Military Blue', 'sneaker_code' => 400000, 'sneaker_color' => 'Blue/White', 'sneaker_price' => 400.00, 'sneaker_image' => 'assets/images/sneakers/military-blue-removebg.webp', 'sneaker_description' => 'Retro basketball shoes', 'brand_id' => 1, 'category_id' => 1],
            ['sneaker_name' => 'Response CL Bad Bunny Paso Fino', 'sneaker_code' => 160000, 'sneaker_color' => 'Brown/White', 'sneaker_price' => 160.00, 'sneaker_image' => 'assets/images/sneakers/paso-fino-removebg.webp', 'sneaker_description' => 'Collaboration with Bad Bunny', 'brand_id' => 2, 'category_id' => 1],
            ['sneaker_name' => 'RS-X3 Puzzle', 'sneaker_code' => 110000, 'sneaker_color' => 'Multi-color', 'sneaker_price' => 110.00, 'sneaker_image' => 'assets/images/sneakers/rs-x3-removebg.webp', 'sneaker_description' => 'Chunky sneakers', 'brand_id' => 3, 'category_id' => 1],
            ['sneaker_name' => 'Classic Leather', 'sneaker_code' => 75000, 'sneaker_color' => 'White', 'sneaker_price' => 75.00, 'sneaker_image' => 'assets/images/sneakers/classic-leather-removebg.webp', 'sneaker_description' => 'Classic running shoes', 'brand_id' => 4, 'category_id' => 1],
            ['sneaker_name' => 'Future Rider Twofold', 'sneaker_code' => 90000, 'sneaker_color' => 'Black/White', 'sneaker_price' => 90.00, 'sneaker_image' => 'assets/images/sneakers/future-rider-removebg.webp', 'sneaker_description' => 'Retro running shoes', 'brand_id' => 3, 'category_id' => 1]
        ]);
    }
}
