<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BuyInsuranceCarRequest extends Model
{
    use HasFactory;
    //buy fully
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
        'cnic',
        'email',
        'reg',
        'survey',
        'date',
        'time',
        'city',
        'order_number',
    ];
}
