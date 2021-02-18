<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Child extends Model
{   
    use HasFactory;
    protected $table = 'childregistration';

    protected $fillable = [
        'First_name', 'Birth_date',
    ];
    
}
