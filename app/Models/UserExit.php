<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;

class UserExit extends Model
{
    use HasFactory, SoftDeletes, HasApiTokens;

    protected $fillable = [
        'useraccountid',
        'exittypeid',
        'reason',
        'date',
        'createdById'
    ];

    //Model Relationship
    public function exittype(){
        return $this->belongsTo(ExitType::class, 'exittypeid');
    }

    public function createdby(){
        return $this->belongsTo(User::class, 'createdById');
    }
}
