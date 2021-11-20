<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillabele = [
            'roleid',
            'username',
            'password',
            // 'email_address',
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
