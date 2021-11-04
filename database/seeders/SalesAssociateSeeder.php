<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SalesAssociate;

class SalesAssociateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sa=[
            [
                'user_id'=>1,
                'hours'=>1
            ],
            [
                'user_id'=>2,
                'hours'=>2
            ],
            [
                'user_id'=>3,
                'hours'=>3
            ],
            [
                'user_id'=>4,
                'hours'=>4
            ],
            [
                'user_id'=>5,
                'hours'=>5
            ],
            [
                'user_id'=>6,
                'hours'=>6
            ],
            [
                'user_id'=>7,
                'hours'=>7
            ],
            [
                'user_id'=>8,
                'hours'=>8
            ],
            [
                'user_id'=>9,
                'hours'=>9
            ],
            [
                'user_id'=>10,
                'hours'=>10
            ],
        ];

        foreach ($sa as $key => $value) {
            # code...
            SalesAssociate::create($value);
        }
    }
}
