<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //has to run in the order of the migrations

        \App\Models\User::factory(10)->create();

            BannerSeeder::class,
            BrandSeeder::Class,
            ProductSeeder::class,
            RatingSeeder::class,
            CouponSeeder::class,            
            UsedCouponSeeder::class,
            CartSeeder::class,
            SalesAssociateSeeder::class,
            CategoryTypeSeeder::class,
            SalesSeeder::class,
            InvoiceSeeder::class,
            CommissionSeeder::class,

        ]);
    }
}
