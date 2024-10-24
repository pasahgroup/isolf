<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimony extends Model
{
    use HasFactory;
     protected $fillable = [
        
        'full_name',
        'email',
        'comments',
        'rating',
        'status',
        'user_id'   
    ];
}
