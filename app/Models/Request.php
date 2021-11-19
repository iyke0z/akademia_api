<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Passport\HasApiTokens;
use Laravel\Sanctum\HasApiTokens as SanctumHasApiTokens;

class Request extends Model
{
    use HasFactory, SoftDeletes, SanctumHasApiTokens;

    protected $fillable = [
        'no_of_days',
        'startdate',
        'enddate',
        'approval_status',
        'createdById',
        'approvedBy',
    ];


    protected $hidden = [
    ];

    // Model relationships
    public function createdBy(){
        return $this->belongsTo(User::class, 'createdById', 'id');
    }
    public function approvedBy(){
        return $this->belongsTo(User::class, 'approvedBy', 'id');
    }
}
