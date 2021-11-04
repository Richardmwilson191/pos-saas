<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Rating;

class RatingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $ratings=[
            [
                'customer_id'=>1,
                'product_id'=>1,
                'rating_value'=>1,
                'date'=>'2021-4-11'
            ],
            [
                'customer_id'=>2,
                'product_id'=>2,
                'rating_value'=>2,
                'date'=>'2021-4-11'
            ],
            [
                'customer_id'=>3,
                'product_id'=>3,
                'rating_value'=>3,
                'date'=>'2021-4-11'
            ],
            [
                'customer_id'=>4,
                'product_id'=>4,
                'rating_value'=>4,
                'date'=>'2021-4-11'
            ],
            [
                'customer_id'=>5,
                'product_id'=>5,
                'rating_value'=>5,
                'date'=>'2021-4-11'
            ],
            [
                'customer_id'=>6,
                'product_id'=>6,
                'rating_value'=>6,
                'date'=>'2021-4-11'
            ],
            [
                'customer_id'=>7,
                'product_id'=>7,
                'rating_value'=>7,
                'date'=>'2021-4-11'
            ],
            [
                'customer_id'=>8,
                'product_id'=>8,
                'rating_value'=>8,
                'date'=>'2021-4-11'
            ],
            [
                'customer_id'=>9,
                'product_id'=>9,
                'rating_value'=>9,
                'date'=>'2021-4-11'
            ],
            [
                'customer_id'=>10,
                'product_id'=>10,
                'rating_value'=>10,
                'date'=>'2021-4-11'
            ],
        ];


        foreach ($ratings as $key => $value) {
            # code...
            Rating::create($value);
        }
    }
}
