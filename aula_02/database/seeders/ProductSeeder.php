<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'Farinha',
            'price' => '12.00',
            'description' => 'Descrição de farinha',
            
        ]);

        Product::create([
            'name' => 'Arroz',
            'price' => '20.00',
            'description' => 'Descrição de arroz',

        ]);

        Product::create([
            'name' => 'Carne',
            'price' => '400.00',
            'description' => 'Descrição de carne',

        ]);

    }
}
