<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Store extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'contact_id',
        'store_type_id',
        'name',
        'title',
        'banner_message',
        'slogan',
        'mission',
        'theme',
        'desc',
        'theme',
        'logo_path'
    ];
}
