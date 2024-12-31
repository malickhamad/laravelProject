<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone',
        'mbps',
        'price',
        'gmail',
        'address',
        'location',
        'status',
    ];

    // Optionally, if you need to customize the table name:
    // protected $table = 'clients';
}
