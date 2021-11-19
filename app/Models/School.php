<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;

class School extends Model
{
    use HasFactory, SoftDeletes, HasApiTokens;

    protected $fillable = [
        'schoolname',
        'schoolemail',
        'schooltel',
        'schoollogo',
        'schoolmotto',
        'address',
        'countryid',
        'stateid',
        'cityid',
        'year_of_establishment',
        'schoolzone',
        'schoolchapter',
        'associationAffiliation',
        'educationDistrict'
    ] ;

    public function country(){
        return $this->belongsTo(Country::class, 'countryid');
    }

    public function  states(){
        return $this->belongsTo(State::class, 'stateid');
    }

    public function city(){
        return $this->belongsTo(City::class, 'cityid');
    }
}
