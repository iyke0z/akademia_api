<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;

class AcademicSession extends Model
{
    use HasFactory;
    use SoftDeletes, HasApiTokens;

    protected $fillable = [
        'session',
        'startdate',
        'enddate',
        'status',
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
