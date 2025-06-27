<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HealthInsurance extends Model
{
    use HasFactory;

    protected $fillable = [
        'person',
        'age',
        'cover',
        'name',
        'phone',
    ];

}
