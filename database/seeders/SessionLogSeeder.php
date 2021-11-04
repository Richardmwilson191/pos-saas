<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SessionLog;

class SessionLogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sessionlogs=[
            [

            ]
        ];

        foreach ($sessionlogs as $key => $value) {
            # code...
            SessionLog::create($value);
        }
    }
}
