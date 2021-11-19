<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;

class City extends Model
{
    use HasFactory;
    use SoftDeletes;
    use HasApiTokens;

    protected $fillable = [
        'city',
        'stateid',
    ];


    protected $hidden = [
    ];

    // Model relationships
    public function state()
    {
    return $this->belongsTo(State::class, 'stateid', 'id');
    }
}
