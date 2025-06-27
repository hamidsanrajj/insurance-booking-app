<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BuyInsuranceCar extends Model
{
    use HasFactory;
    //buy
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
    ];
}
