<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // DB::table('products')->insert([
        //     'name' => 'Sample Product',
        //     'description' => 'This is a sample product description.',
        //     'price' => 19.99,
        // ]);

        // DB::table('products')->insert([
        //     'name' => 'Sample Product',
        //     'description' => 'This is a sample product description.',
        //     'price' => 19.99,
        //     'reference' => 'SP001',
        //     'cost'=> 10.00,
        //     'type' => 'general',
        //     'active' => 1,

        // ]);

        // crear 50 productos de ejemplo factory
        Product::factory(20)->create();
        
    }
}
