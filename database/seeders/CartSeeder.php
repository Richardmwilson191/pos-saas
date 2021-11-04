<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cart;

class CartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $carts = [
            [
                'customer_id'=>1,
                'product_id'=>1,
                'qty'=>1,
                'price'=>1.00
            ],
            [
                'customer_id'=>2,
                'product_id'=>2,
                'qty'=>2,
                'price'=>2.00
            ],
            [
                'customer_id'=>3,
                'product_id'=>3,
                'qty'=>3,
                'price'=>3.00
            ],
            [
                'customer_id'=>4,
                'product_id'=>4,
                'qty'=>4,
                'price'=>4.00
            ],
            [
                'customer_id'=>5,
                'product_id'=>5,
                'qty'=>5,
                'price'=>5.00
            ],
            [
                'customer_id'=>6,
                'product_id'=>6,
                'qty'=>6,
                'price'=>6.00
            ],
            [
                'customer_id'=>7,
                'product_id'=>7,
                'qty'=>7,
                'price'=>7.00
            ],
            [
                'customer_id'=>8,
                'product_id'=>8,
                'qty'=>8,
                'price'=>8.00
            ],
            [
                'customer_id'=>9,
                'product_id'=>9,
                'qty'=>9,
                'price'=>9.00
            ],
            [
                'customer_id'=>10,
                'product_id'=>10,
                'qty'=>10.00,
                'price'=>10.00
            ],
        ];

        foreach ($carts as $key => $value) {
            # code...
            Cart::create($value);
        }
    }
}
