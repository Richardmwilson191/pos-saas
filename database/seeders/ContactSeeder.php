<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Contact;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contacts= [
            [
                'contact_num'=>876-111-1111,
                'contact_email'=>'contact1@gmail.com',
                'contact_location'=>'cotact1 address'
            ],
            [
                'contact_num'=>876-121-1111,
                'contact_email'=>'contact2@gmail.com',
                'contact_location'=>'cotact2 address'
            ],
            [
                'contact_num'=>876-131-1111,
                'contact_email'=>'contact3@gmail.com',
                'contact_location'=>'cotact3 address'
            ],
            [
                'contact_num'=>876-141-1111,
                'contact_email'=>'contact4@gmail.com',
                'contact_location'=>'cotact4 address'
            ],
            [
                'contact_num'=>876-151-1111,
                'contact_email'=>'contact5@gmail.com',
                'contact_location'=>'cotact5 address'
            ],
            [
                'contact_num'=>876-161-1111,
                'contact_email'=>'contact6@gmail.com',
                'contact_location'=>'cotact6 address'
            ],
            [
                'contact_num'=>876-171-1111,
                'contact_email'=>'contact7@gmail.com',
                'contact_location'=>'cotact7 address'
            ],
            [
                'contact_num'=>876-181-1111,
                'contact_email'=>'contact8@gmail.com',
                'contact_location'=>'cotact8 address'
            ],
            [
                'contact_num'=>876-191-1111,
                'contact_email'=>'contact9@gmail.com',
                'contact_location'=>'cotact9 address'
            ],
            [
                'contact_num'=>876-111-0111,
                'contact_email'=>'contact10@gmail.com',
                'contact_location'=>'cotact10 address'
            ],
        ];

        foreach ($contacts as $key => $value) {
            # code...
            Contact::create($value);
        }
    }
}
