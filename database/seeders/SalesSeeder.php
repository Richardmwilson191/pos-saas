<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Sales;

class SalesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sales=[
            [
                'sales_associate_id'=>1,
                'customer_id'=>1,
                't_quantity'=>1,
                't_amount'=>1,
                'date'=>'2021-11-11'
            ],
            [
                'sales_associate_id'=>2,
                'customer_id'=>2,
                't_quantity'=>2,
                't_amount'=>2,
                'date'=>'2021-11-11'
            ],
            [
                'sales_associate_id'=>3,
                'customer_id'=>3,
                't_quantity'=>3,
                't_amount'=>3,
                'date'=>'2021-11-11'
            ],
            [
                'sales_associate_id'=>4,
                'customer_id'=>4,
                't_quantity'=>4,
                't_amount'=>4,
                'date'=>'2021-11-11'
            ],
            [
                'sales_associate_id'=>5,
                'customer_id'=>5,
                't_quantity'=>5,
                't_amount'=>5,
                'date'=>'2021-11-11'
            ],
            [
                'sales_associate_id'=>6,
                'customer_id'=>6,
                't_quantity'=>6,
                't_amount'=>6,
                'date'=>'2021-11-11'
            ],
            [
                'sales_associate_id'=>7,
                'customer_id'=>7,
                't_quantity'=>7,
                't_amount'=>7,
                'date'=>'2021-11-11'
            ],
            [
                'sales_associate_id'=>8,
                'customer_id'=>8,
                't_quantity'=>8,
                't_amount'=>8,
                'date'=>'2021-11-11'
            ],
            [
                'sales_associate_id'=>9,
                'customer_id'=>9,
                't_quantity'=>9,
                't_amount'=>9,
                'date'=>'2021-11-11'
            ],
            [
                'sales_associate_id'=>10,
                'customer_id'=>10,
                't_quantity'=>10,
                't_amount'=>10,
                'date'=>'2021-11-11'
            ],
        ];

        foreach ($sales as $key => $value) {
            # code...
            Sales::create($value);
        }
    }
}
