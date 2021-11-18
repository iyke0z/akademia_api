<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Passport\HasApiTokens;

class Gender extends Model
{
    use HasFactory;
    use SoftDeletes;
    use HasApiTokens;
    
    protected $fillable = [
        'gender',
    ];


    protected $hidden = [
    ];

    // Model relationships
}
