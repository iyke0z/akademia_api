<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;

class Branch extends Model
{
    use HasFactory;
    use SoftDeletes;
    use HasApiTokens;

    protected $fillable = [
        'branchname',
        'schoolid',
        'branchaddress',
        'countryid',
        'stateid',
        'cityid',
        'branchtel',
    ];


    protected $hidden = [
    ];

    // Model relationships
    public function school()
    {
    return $this->belongsTo(School::class, 'schoolid', 'id');
    }
    public function country()
    {
    return $this->belongsTo(Country::class, 'countryid', 'id');
    }
    public function state()
    {
    return $this->belongsTo(State::class, 'stateid', 'id');
    }
    public function city()
    {
    return $this->belongsTo(City::class, 'cityid', 'id');
    }
}
