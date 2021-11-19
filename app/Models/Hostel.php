<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;

class Hostel extends Model
{
    use HasFactory;
    use SoftDeletes;
    use HasApiTokens;

    protected $fillable = [
        'hostelname',
        'hosteldescription',
        'branchid',
        'createdBy',
    ];


    protected $hidden = [
    ];

    // Model relationships
    public function branch()
    {
        return $this->belongsTo(Branch::class, 'branchid', 'id');
    }
    public function createdBy()
    {
        return $this->belongsTo(User::class, 'createdBy', 'id');
    }
}
