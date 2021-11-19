<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;

class User_Priviledge extends Model
{
    use HasFactory, SoftDeletes, HasApiTokens;

    protected $fillable =[
        'userid',
        'priviledges_id',
        'branchid',
        'assignedBy'
    ];

// Model Relationship
    public function user(){
        return $this->belongsTo(User::class, 'userid');
    }

    public function priviledge(){
        return $this->belongsTo(Priviledge::class, 'priviledges_id');
    }

    public function branch(){
        return $this->belongsTo(Branch::class, 'branchid');
    }

    public function assignedBy(){
        return $this->belongsTo(User::class, 'assignedBy');
    }
}
