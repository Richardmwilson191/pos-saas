<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Brand;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $brands= [
            [
                'brand_nm'=>'brand 1'
            ],
            [
                'brand_nm'=>'brand 2'
            ],
            [
                'brand_nm'=>'brand 3'
            ],
            [
                'brand_nm'=>'brand 4'
            ],
            [
                'brand_nm'=>'brand 5'
            ],
            [
                'brand_nm'=>'brand 6'
            ],
            [
                'brand_nm'=>'brand 7'
            ],
            [
                'brand_nm'=>'brand 8'
            ],
            [
                'brand_nm'=>'brand 9'
            ],
            [
                'brand_nm'=>'brand 10'
            ],
        ];

        foreach ($brands as $key => $value) {
            # code...
            Brand::create($value);
        }
    }
}
