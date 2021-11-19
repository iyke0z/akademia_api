<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;

class ParentProfile extends Model
{
    use HasFactory;
    use SoftDeletes;
    use HasApiTokens;

    protected $fillable = [
        'useraccountid',
        'title',
        'firstname',
        'lastname',
        'othernames',
        'dob',
        'genderid',
        'nationalityid',
        'stateoforiginid',
        'local_govt_area',
        'religion',
        'address',
        'countryid',
        'stateid',
        'cityid',
        'contactemail',
        'conacttel',
        'photo',
        'createdById',
    ];


    protected $hidden = [
    ];

    // Model relationships
    public function user()
    {
    return $this->belongsTo(User::class, 'users', 'id');
    }
    public function gender()
    {
    return $this->belongsTo(Gender::class, 'genders', 'id');
    }
    public function countries()
    {
    return $this->belongsTo(Country::class, 'countryid', 'id');
    }
    public function statesoforigin()
    {
    return $this->belongsTo(State::class, 'stateid', 'id');
    }
    public function nationality()
    {
    return $this->belongsTo(Country::class, 'nationalityid', 'id');
    }
    public function state()
    {
    return $this->belongsTo(State::class, 'stateid', 'id');
    }
    public function city()
    {
    return $this->belongsTo(City::class, 'cityid', 'id');
    }
    public function createdby()
    {
    return $this->belongsTo(User::class, 'createdById', 'id');
    }
}
