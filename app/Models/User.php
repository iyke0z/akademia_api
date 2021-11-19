<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;

class User extends Model
{
    use HasFactory, SoftDeletes, HasApiTokens;

    protected $fillabele = [
            'roleid',
            'username',
            'password',
            'email_address',
            'email_verified',
            'branchid'
    ];

    // Model Relationships
    public function role(){
        return $this->belongsTo(Role::class, 'roleid');
    }

    public function branch(){
        return $this->belongsTo(Branch::class, 'branchid');
    }
}
