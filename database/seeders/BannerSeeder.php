<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Banner;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $banners= [
            [
                'store_id'=>'1',
                'image_path'=>'banner 1'
            ],
            [
                'store_id'=>'2',
                'image_path'=>'banner 2'
            ],
            [
                'store_id'=>'3',
                'image_path'=>'banner 3'
            ],
            [
                'store_id'=>'4',
                'image_path'=>'banner 4'
            ],
            [
                'store_id'=>'5',
                'image_path'=>'banner 5'
            ],
            [
                'store_id'=>'6',
                'image_path'=>'banner 6'
            ],
            [
                'store_id'=>'7',
                'image_path'=>'banner 7'
            ],
            [
                'store_id'=>'8',
                'image_path'=>'banner 8'
            ],
            [
                'store_id'=>'9',
                'image_path'=>'banner 9'
            ],
            [
                'store_id'=>'10',
                'image_path'=>'banner 10'
            ],
        ];

        foreach ($banners as $key => $value) {
            # code...
            Banner::create($value);
        }
    }
}
