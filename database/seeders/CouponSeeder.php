<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Coupon;

class CouponSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $coupons=[
            [
                'store_id'=>1,
                'code'=>'1',
                'discount_amt'=>1,
                'status'=>'active',
                'expire_date'=>'2021-4-11'
            ],
            [
                'store_id'=>2,
                'code'=>'2',
                'discount_amt'=>2,
                'status'=>'active',
                'expire_date'=>'2021-4-11'
            ],
            [
                'store_id'=>3,
                'code'=>'3',
                'discount_amt'=>3,
                'status'=>'active',
                'expire_date'=>'2021-4-11'
            ],
            [
                'store_id'=>4,
                'code'=>'4',
                'discount_amt'=>4,
                'status'=>'active',
                'expire_date'=>'2021-4-11'
            ],
            [
                'store_id'=>5,
                'code'=>'5',
                'discount_amt'=>5,
                'status'=>'active',
                'expire_date'=>'2021-4-11'
            ],
            [
                'store_id'=>6,
                'code'=>'6',
                'discount_amt'=>6,
                'status'=>'active',
                'expire_date'=>'2021-4-11'
            ],
            [
                'store_id'=>7,
                'code'=>'7',
                'discount_amt'=>7,
                'status'=>'active',
                'expire_date'=>'2021-4-11'
            ],
            [
                'store_id'=>8,
                'code'=>'8',
                'discount_amt'=>8,
                'status'=>'active',
                'expire_date'=>'2021-4-11'
            ],
            [
                'store_id'=>9,
                'code'=>'9',
                'discount_amt'=>9,
                'status'=>'active',
                'expire_date'=>'2021-4-11'
            ],
            [
                'store_id'=>10,
                'code'=>'10',
                'discount_amt'=>10,
                'status'=>'active',
                'expire_date'=>'2021-4-11'
            ],
        ];

        foreach ($coupons as $key => $value) {
            # code...
            Coupon::create($value);
        }
    }
}
