<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Product::create([
            'name' => 'LARAVEL Y LIVEWIRE',
            'cost' => 5,
            'price' => 350,
            'barcode' => '75010065987',
            'stock' => 1000,
            'alerts' => 10,
            'category_id' => 1,
            'image' => 'curso.png'
        ]);
        Product::create([
            'name' => 'RUNNING NIKE',
            'cost' => 600,
            'price' => 1350,
            'barcode' => '75010065914',
            'stock' => 1000,
            'alerts' => 10,
            'category_id' => 2,
            'image' => 'curso.png'
        ]);
        Product::create([
            'name' => 'IPHONE 11',
            'cost' => 900,
            'price' => 2250,
            'barcode' => '75010065987',
            'stock' => 1000,
            'alerts' => 10,
            'category_id' => 3,
            'image' => 'curso.png'
        ]);
        Product::create([
            'name' => 'PC GAMER',
            'cost' => 500,
            'price' => 350,
            'barcode' => '75010065987',
            'stock' => 1000,
            'alerts' => 10,
            'category_id' => 4,
            'image' => 'curso.png'
        ]);
    }
}
