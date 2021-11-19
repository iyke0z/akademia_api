<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;

class State extends Model
{
    use HasFactory, SoftDeletes, HasApiTokens;

    protected $fillable = ['state', 'countryid'];

    // Model Relationships
    public function country(){
        return $this->belongsTo(Country::class, 'countryid');
    }
}
