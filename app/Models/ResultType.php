<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;

class ResultType extends Model
{
    use HasFactory, SoftDeletes, HasApiTokens;

    protected $fillable = [
        'resulttype',
        'percentage',
        'branchid',
        'createdBy'
    ];

    public function branch(){
        return $this->belongsTo(Branch::class, 'branchid');
    }

    public function createdBy(){
        return $this->belongsTo(User::class, 'createdBy');
    }
}
