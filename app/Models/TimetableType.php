<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;

class TimetableType extends Model
{
    use HasFactory, HasApiTokens;
    protected $fillable = ['tabletype'];
}
