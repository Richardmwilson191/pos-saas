<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\StoreType;

class StoreTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = [
            [
                'type'=>'type 1'
            ],
            [
                'type'=>'type 2'
            ],
            [
                'type'=>'type 3'
            ],
            [
                'type'=>'type 4'
            ],
            [
                'type'=>'type 5'
            ],
            [
                'type'=>'type 6'
            ],
            [
                'type'=>'type 7'
            ],
            [
                'type'=>'type 7'
            ],
            [
                'type'=>'type 8'
            ],
            [
                'type'=>'type 9'
            ],
            [
                'type'=>'type 10'
            ],
        ];

        foreach ($types as $key => $value) {
            # code...
            StoreType::create($value);
        }
    }
}
