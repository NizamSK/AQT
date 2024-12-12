<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    use HasFactory;

    // Define the table name (optional if it matches the model name in plural form)
    protected $table = 'leads';

    // Mass assignable fields
    protected $fillable = [
        'name', 
        'email',
        'phone', 
        'company', 
        'designation'
    ];

    public $timestamps = false;
}
