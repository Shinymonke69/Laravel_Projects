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
            'name' => 'Arroz',
            'price' => 25.54,
            'description' => 'Arroz Branco Camil',
        ]);

        Product::create([
            'name' => 'Carne',
            'price' => 20.25,
            'description' => 'Carne Bovina de 1ª',
        ]);

        Product::create([
            'name' => 'Pão',
            'price' => 3.20,
            'description' => 'Pão Francês',
        ]);
    }
}
