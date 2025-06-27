<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarInsurance extends Model
{
    use HasFactory;

    protected $fillable = [
        'brand',
        'model',
        'year',
        'value',
        'name',
        'phone',
    ];

}
