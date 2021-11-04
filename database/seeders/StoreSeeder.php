<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Store;

class StoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $stores = [
            [
                'user_id'=>1,
                'contact_id'=>1,
                'store_type_id'=>1,
                'name'=>'Store 1',
                'title'=>'Store 1',
                'banner_message'=>'Store 1',
                'slogan'=>'Store 1',
                'mission'=>' Store 1',
                'theme'=>' Store 1',
                'desc'=>'Store 1',
                'theme'=>'Store 1',
                'logo_path'=>'Store 1 logo'
            ],
            [
                'user_id'=>2,
                'contact_id'=>2,
                'store_type_id'=>2,
                'name'=>'Store 2',
                'title'=>'Store 2',
                'banner_message'=>'Store 2',
                'slogan'=>'Store 2',
                'mission'=>'Store 2',
                'theme'=>'Store 2',
                'desc'=>'Store 2',
                'theme'=>'Store 2',
                'logo_path'=>'Store 2 logo'
            ],
            [
                'user_id'=>3,
                'contact_id'=>3,
                'store_type_id'=>3,
                'name'=>'Store 3',
                'title'=>'Store 3',
                'banner_message'=>'Store 3',
                'slogan'=>'Store 3',
                'mission'=>'Store 3',
                'theme'=>'Store 3',
                'desc'=>'Store 3',
                'theme'=>'Store 3',
                'logo_path'=>'Store 3 logo'
            ],
            [
                'user_id'=>4,
                'contact_id'=>4,
                'store_type_id'=>4,
                'name'=>'Store 4',
                'title'=>'',
                'banner_message'=>'Store 4',
                'slogan'=>'Store 4',
                'mission'=>'Store 4',
                'theme'=>'Store 4',
                'desc'=>'Store 4',
                'theme'=>'Store 4',
                'logo_path'=>'Store 4 logo'
            ],
            [
                'user_id'=>5,
                'contact_id'=>5,
                'store_type_id'=>5,
                'name'=>'Store 5',
                'title'=>'Store 5',
                'banner_message'=>'Store 5',
                'slogan'=>'Store 5',
                'mission'=>'Store 5',
                'theme'=>'Store 5',
                'desc'=>'Store 5',
                'theme'=>'Store 5',
                'logo_path'=>'Store 5 logo'
            ],
            [
                'user_id'=>6,
                'contact_id'=>6,
                'store_type_id'=>6,
                'name'=>'Store 6',
                'title'=>'Store 6',
                'banner_message'=>'Store 6',
                'slogan'=>'Store 6',
                'mission'=>'Store 6',
                'theme'=>'Store 6',
                'desc'=>'Store 6',
                'theme'=>'Store 6',
                'logo_path'=>'Store 6 logo'
            ],
            [
                'user_id'=>7,
                'contact_id'=>7,
                'store_type_id'=>7,
                'name'=>'Store 7',
                'title'=>'Store 7',
                'banner_message'=>'Store 7',
                'slogan'=>'Store 7',
                'mission'=>'Store 7',
                'theme'=>'Store 7',
                'desc'=>'Store 7',
                'theme'=>'Store 7',
                'logo_path'=>'Store 7 logo'
            ],
            [
                'user_id'=>8,
                'contact_id'=>8,
                'store_type_id'=>8,
                'name'=>'Store 8',
                'title'=>'Store 8',
                'banner_message'=>'Store 8',
                'slogan'=>'Store 8',
                'mission'=>'Store 8',
                'theme'=>'Store 8',
                'desc'=>'Store 8',
                'theme'=>'Store 8',
                'logo_path'=>'Store 8 logo'
            ],
            [
                'user_id'=>9,
                'contact_id'=>9,
                'store_type_id'=>9,
                'name'=>'Store 9',
                'title'=>'Store 9',
                'banner_message'=>'Store 9',
                'slogan'=>'Store 9',
                'mission'=>'Store 9',
                'theme'=>'Store 9',
                'desc'=>'Store 9',
                'theme'=>'Store 9',
                'logo_path'=>'Store 9 logo'
            ],
            [
                'user_id'=>10,
                'contact_id'=>10,
                'store_type_id'=>10,
                'name'=>'Store 10',
                'title'=>'Store 10',
                'banner_message'=>'Store 10',
                'slogan'=>'Store 10',
                'mission'=>'Store 10',
                'theme'=>'Store 10',
                'desc'=>'Store 10',
                'theme'=>'Store 10',
                'logo_path'=>'Store 10 logo'
            ]
        ];


        foreach ($stores as $key => $value) {
            # code...
            Store::create($value);
        }
    }
}
