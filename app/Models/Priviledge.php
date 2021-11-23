<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Passport\HasApiTokens;
use Laravel\Sanctum\HasApiTokens as SanctumHasApiTokens;

class Priviledge extends Model
{
    use HasFactory, SoftDeletes, SanctumHasApiTokens;

    protected $fillable = [
        'priviledge',
    ];


    protected $hidden = [
    ];

    // Model relationships
}
