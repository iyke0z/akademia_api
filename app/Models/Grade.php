<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Passport\HasApiTokens;

class Grade extends Model
{
    use HasFactory;
    use SoftDeletes;
    use HasApiTokens;
    
    protected $fillable = [
        'gender',
        'branchid',
        'createdById',
    ];


    protected $hidden = [
    ];

    // Model relationships
    public function branch()
    {
    return $this->belongsTo(Branch::class, 'branchid', 'id');
    }
    public function user()
    {
    return $this->belongsTo(User::class, 'createdById', 'id');
    }
}
