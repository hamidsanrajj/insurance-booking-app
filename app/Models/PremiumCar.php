<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PremiumCar extends Model
{
    use HasFactory;  
    //enquire
    protected $fillable = [
        'brand',
        'model',
        'year',
        'value',
        'name',
        'phone',
        'logo',
        'title',
        'rate',
        'installment',
        'total',
        'order_number'
    ];

}
