<?php
// app/Models/Complaint.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    // Define the table if it is not named `complaints` by default
    protected $table = 'complaints';

    // Specify the fillable fields if needed
    protected $fillable = ['name', 'phone', 'email', 'address', 'location', 'message'];
}
