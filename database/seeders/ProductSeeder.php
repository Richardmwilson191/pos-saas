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
        //
        $products=[
            [
                'brand_id'=>1,
                'store_id'=>1,
                'category_id'=>1,
                'name'=>'Product 1',
                'weight'=>1,
                'price'=>1.00,
                'sale_price'=>2.00,
                'qty'=>1,
                'status'=>'Active',
                'desc'=>'Product 1 Description'
            ],
            [
                'brand_id'=>2,
                'store_id'=>2,
                'category_id'=>2,
                'name'=>'Product 2',
                'weight'=>2,
                'price'=>2.00,
                'sale_price'=>3.00,
                'qty'=>2,
                'status'=>'Active',
                'desc'=>'Product 2 Description'
            ],
            [
                'brand_id'=>3,
                'store_id'=>3,
                'category_id'=>3,
                'name'=>'Product 3',
                'weight'=>3,
                'price'=>3.00,
                'sale_price'=>4.00,
                'qty'=>3,
                'status'=>'Active',
                'desc'=>'Product 3 Description'
            ],
            [
                'brand_id'=>4,
                'store_id'=>4,
                'category_id'=>4,
                'name'=>'Product 4',
                'weight'=>4,
                'price'=>4.00,
                'sale_price'=>5.00,
                'qty'=>4,
                'status'=>'Active',
                'desc'=>'Product 4 Description'
            ],
            [
                'brand_id'=>5,
                'store_id'=>5,
                'category_id'=>5,
                'name'=>'Product 5',
                'weight'=>5,
                'price'=>5.00,
                'sale_price'=>6.00,
                'qty'=>5,
                'status'=>'Active',
                'desc'=>'Product 5 Description'
            ],
            [
                'brand_id'=>6,
                'store_id'=>6,
                'category_id'=>6,
                'name'=>'Product 6',
                'weight'=>6,
                'price'=>6.00,
                'sale_price'=>7.00,
                'qty'=>6,
                'status'=>'Active',
                'desc'=>'Product 6 Description'
            ],
            [
                'brand_id'=>7,
                'store_id'=>7,
                'category_id'=>7,
                'name'=>'Product',
                'weight'=>7,
                'price'=>7.00,
                'sale_price'=>8.00,
                'qty'=>7,
                'status'=>'Active',
                'desc'=>'Product 7 Description'
            ],
            [
                'brand_id'=>8,
                'store_id'=>8,
                'category_id'=>8,
                'name'=>'Product 8',
                'weight'=>8,
                'price'=>8.00,
                'sale_price'=>9.00,
                'qty'=>8,
                'status'=>'Active',
                'desc'=>'Product 8 Description'
            ],
            [
                'brand_id'=>9,
                'store_id'=>9,
                'category_id'=>9,
                'name'=>'Product 9',
                'weight'=>9,
                'price'=>9.00,
                'sale_price'=>10.00,
                'qty'=>9,
                'status'=>'Active',
                'desc'=>'Product 9 Description'
            ],
            [
                'brand_id'=>10,
                'store_id'=>10,
                'category_id'=>10,
                'name'=>'Product 10',
                'weight'=>10,
                'price'=>10.00,
                'sale_price'=>11.00,
                'qty'=>10,
                'status'=>'Active',
                'desc'=>'Product 10 Description'
            ],
        ];

        foreach ($products as $key => $value) {
            # code...
            Product::create($value);
        }
    }
}
