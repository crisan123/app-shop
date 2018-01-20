<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // aca susamos los model factories para llenar la tabla Products con datos ficticios de prueba.

    	factory(Product::class, 100)->create();

    }
}
