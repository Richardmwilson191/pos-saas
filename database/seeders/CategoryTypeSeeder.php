<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CategoryType;

class CategoryTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categorytypes = [
            [
                'type'=>'Category type 1',
            ],
            [
                'type'=>'Category type 2',
            ],
            [
                'type'=>'Category type 3',
            ],
            [
                'type'=>'Category type 4',
            ],
            [
                'type'=>'Category type 5',
            ],
            [
                'type'=>'Category type 6',
            ],
            [
                'type'=>'Category type 7',
            ],
            [
                'type'=>'Category type 8',
            ],
            [
                'type'=>'Category type 9',
            ],
            [
                'type'=>'Category type 10',
            ],
        ];

        foreach ($categorytypes as $key => $value) {
            # code...
            CategoryType::create($value);
        }
    }
}
