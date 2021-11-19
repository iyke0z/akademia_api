<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;

class AcademicYear extends Model
{
    use HasFactory;
    use SoftDeletes, HasApiTokens;

    protected $fillable = [
        'year',
        'branchid',
        'created_by',
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
    return $this->belongsTo(User::class, 'created_by', 'id');
    }

}
