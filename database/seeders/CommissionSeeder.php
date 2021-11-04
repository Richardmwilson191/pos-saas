<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Commission;

class CommissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $commissions= [
            [
                'store_id'=>1,
                'commission_rate'=>1
            ],
            [
                'store_id'=>2,
                'commission_rate'=>2
            ],
            [
                'store_id'=>3,
                'commission_rate'=>3
            ],
            [
                'store_id'=>4,
                'commission_rate'=>4
            ],
            [
                'store_id'=>5,
                'commission_rate'=>5
            ],
            [
                'store_id'=>6,
                'commission_rate'=>6
            ],
            [
                'store_id'=>7,
                'commission_rate'=>7
            ],
            [
                'store_id'=>8,
                'commission_rate'=>8
            ],
            [
                'store_id'=>9,
                'commission_rate'=>9
            ],
            [
                'store_id'=>10,
                'commission_rate'=>10
            ],
        ];

        foreach ($commissions as $key => $value) {
            # code...
            Commission::create($value);
        }
    }
}
