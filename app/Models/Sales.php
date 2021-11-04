<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    use HasFactory;

    protected $fillable = [
        'sales_associate_id',
        'customer_id',
        't_quantity',
        't_amount',
        'date'
    ];
}
