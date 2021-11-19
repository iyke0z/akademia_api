<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;

class Assignment extends Model
{
    use HasFactory;
    use SoftDeletes;
    use HasApiTokens;

    protected $fillable = [
        'subjectid',
        'description',
        'createdBy',
    ];


    protected $hidden = [
    ];

    // Model relationships
    public function subject()
    {
    return $this->belongsTo(Subject::class, 'subjectid', 'id');
    }
    public function user()
    {
    return $this->belongsTo(User::class, 'createdBy', 'id');
    }
}
