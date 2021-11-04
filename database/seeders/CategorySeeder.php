<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories=[
            [
                'category_type_id'=>1,
                'category_nm'=>'category 1 name',
                'category_desc'=>'category 1 description',
            ],
            [
                'category_type_id'=>2,
                'category_nm'=>'category 2 name',
                'category_desc'=>'category 2 description',
            ],
            [
                'category_type_id'=>3,
                'category_nm'=>'category 3 name',
                'category_desc'=>'category 3 description',
            ],
            [
                'category_type_id'=>4,
                'category_nm'=>'category 4 name',
                'category_desc'=>'category 4 description',
            ],
            [
                'category_type_id'=>5,
                'category_nm'=>'category 5 name',
                'category_desc'=>'category 5 description',
            ],
            [
                'category_type_id'=>6,
                'category_nm'=>'category 6 name',
                'category_desc'=>'category 6 description',
            ],
            [
                'category_type_id'=>7,
                'category_nm'=>'category 7 name',
                'category_desc'=>'category 7 description',
            ],
            [
                'category_type_id'=>8,
                'category_nm'=>'category 8 name',
                'category_desc'=>'category 8 description',
            ],
            [
                'category_type_id'=>9,
                'category_nm'=>'category 9 name',
                'category_desc'=>'category 9 description',
            ],
            [
                'category_type_id'=>10,
                'category_nm'=>'category 10 name',
                'category_desc'=>'category 10 description',
            ],
        ];

        foreach ($categories as $key => $value) {
            # code...
            Category::create($value);
        }
    }
}
