<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Invoice;

class InvoiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $invoices=[
            [
                'sale_id'=>1,
                'project_id'=>1,
                'invoice_nbr'=>1,
                'date'=>'2021-4-11'
            ],
            [
                'sale_id'=>2,
                'project_id'=>2,
                'invoice_nbr'=>2,
                'date'=>'2021-4-11'
            ],
            [
                'sale_id'=>3,
                'project_id'=>3,
                'invoice_nbr'=>3,
                'date'=>'2021-4-11'
            ],
            [
                'sale_id'=>4,
                'project_id'=>4,
                'invoice_nbr'=>4,
                'date'=>'2021-4-11'
            ],
            [
                'sale_id'=>5,
                'project_id'=>5,
                'invoice_nbr'=>5,
                'date'=>'2021-4-11'
            ],
            [
                'sale_id'=>6,
                'project_id'=>6,
                'invoice_nbr'=>6,
                'date'=>'2021-4-11'
            ],
            [
                'sale_id'=>7,
                'project_id'=>7,
                'invoice_nbr'=>7,
                'date'=>'2021-4-11'
            ],
            [
                'sale_id'=>8,
                'project_id'=>8,
                'invoice_nbr'=>8,
                'date'=>'2021-4-11'
            ],
            [
                'sale_id'=>9,
                'project_id'=>9,
                'invoice_nbr'=>9,
                'date'=>'2021-4-11'
            ],
            [
                'sale_id'=>10,
                'project_id'=>10,
                'invoice_nbr'=>10,
                'date'=>'2021-4-11'
            ],
        ];


        foreach ($invoices as $key => $value) {
            # code...
            Invoice::Create($value);
        }
    }
}
