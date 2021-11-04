<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\UsedCoupon;

class UsedCouponSeeder extends Seeder
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
                'customer_id'=>1,
                'coupon_id'=>1,
                'use_date'=>'2021-4-4',
                'isused'=>0,
            ],
            [
                'customer_id'=>2,
                'coupon_id'=>2,
                'use_date'=>'2021-4-4',
                'isused'=>0,
            ],
            [
                'customer_id'=>3,
                'coupon_id'=>3,
                'use_date'=>'2021-4-4',
                'isused'=>0,
            ],
            [
                'customer_id'=>4,
                'coupon_id'=>4,
                'use_date'=>'2021-4-4',
                'isused'=>0,
            ],
            [
                'customer_id'=>5,
                'coupon_id'=>5,
                'use_date'=>'2021-4-4',
                'isused'=>0,
            ],
            [
                'customer_id'=>6,
                'coupon_id'=>6,
                'use_date'=>'2021-4-4',
                'isused'=>0,
            ],
            [
                'customer_id'=>7,
                'coupon_id'=>7,
                'use_date'=>'2021-4-4',
                'isused'=>0,
            ],
            [
                'customer_id'=>8,
                'coupon_id'=>8,
                'use_date'=>'2021-4-4',
                'isused'=>0,
            ],
            [
                'customer_id'=>9,
                'coupon_id'=>9,
                'use_date'=>'2021-4-4',
                'isused'=>0,
            ],
            [
                'customer_id'=>10,
                'coupon_id'=>10,
                'use_date'=>'2021-4-4',
                'isused'=>0,
            ],
        ];

        foreach ($coupons as $key => $value) {
            # code...
            UsedCoupon::create($value);
        }
    }
}
