<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TravelInsurance extends Model
{
    use HasFactory;

    protected $fillable = [
        'trip',
        'travelling',
        'departure',
        'return',
        'passenger',
        'name',
        'phone',
    ];
    
}
