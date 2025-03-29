<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::insert([
            ['name' => 'Produit 1', 'price' => 100.00],
            ['name' => 'Produit 2', 'price' => 200.00],
            ['name' => 'Produit 3', 'price' => 300.00],
        ]);
    }
}
