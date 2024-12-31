<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    use HasFactory;

    protected $fillable = [
        'package_id',
        'mbps',
        'price',
        'status', // Add this line
        'gmail',  // Add this line
    ];
}
