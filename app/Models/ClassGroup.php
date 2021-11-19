<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;

class ClassGroup extends Model
{
    use HasFactory;
    use SoftDeletes;
    use HasApiTokens;

    protected $fillable = [
        'branchid',
        'createdById',
        'classgroupname',
    ];


    protected $hidden = [
    ];

    // Model relationships
    public function user()
    {
    return $this->belongsTo(User::class, 'createdById', 'id');
    }
    public function branch()
    {
    return $this->belongsTo(Branch::class, 'branchid', 'id');
    }
}
