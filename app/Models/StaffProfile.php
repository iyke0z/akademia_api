<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;

class StaffProfile extends Model
{
    use HasFactory, SoftDeletes, HasApiTokens;

    protected $fillable = [
        'staffuseraccountid',
        'firstname',
        'lastname',
        'othernames',
        'dob',
        'genderid',
        'nationalityid',
        'stateoforiginid',
        'local_govt_area',
        'appointment_date',
        'religion',
        'address',
        'countryid',
        'stateid',
        'cityid',
        'contactemail',
        'contacttel',
        'photo',
        'rankid',
        'createdById'
    ];

    public function staffuseraccountid(){
        return $this->belongsTo(User::class, 'staffuseraccountid');
    }
    public function gender(){
        return $this->belongsTo(Gender::class, 'genderid');
    }

    public function nationality(){
        return $this->belongsTo(Country::class, 'nationalityid');
    }

    public function stateoforigin(){
        return $this->belongsTo(State::class, 'stateid');
    }

    public function country(){
        return $this->belongsTo(Country::class, 'nationalityid');
    }

    public function state(){
        return $this->belongsTo(State::class, 'stateid');
    }

    public function city(){
        return $this->belongsTo(City::class, 'cityid');
    }

    public function rank(){
        return $this->belongsTo(Rank::class, 'rankid');
    }

    public function createdBy(){
        return $this->belongsTo(User::class, 'createdById');
    }
}
