<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;

class StudentProfile extends Model
{
    use HasFactory, SoftDeletes, HasApiTokens;

    protected $fillable = [
        'studentuseraccountid',
        'firstname',
        'lastname',
        'othernames',
        'dob',
        'genderid',
        'nationalityid',
        'stateoforiginid',
        'local_govt_area',
        'enrollmentdate',
        'religion',
        'address',
        'countryid',
        'stateid',
        'cityid',
        'contactemail',
        'conacttel',
        'payment_status',
        'photo',
        'yearid',
        'createdById',
    ];

    public function studentaccountid(){
        return $this->belongsTo(User::class, 'studentuseraccountid');
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


    public function createdBy(){
        return $this->belongsTo(User::class, 'createdById');
    }

}
