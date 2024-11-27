<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;  
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Producto Desde Seeder',
            'description' => 'Este producto se agregó desde un seeder',
            'price' => 250.00,
            'category_id' => 1, // Asegúrate de que esta categoría exista
        ]);
    }
}
