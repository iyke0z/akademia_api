<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;

class Curriculum extends Model
{
    use HasFactory;
    use SoftDeletes;
    use HasApiTokens;

    protected $fillable = [
        'subject_teacher',
        'file_url',
        'approval_status',
        'createdById',
        'approvedBy',
    ];


    protected $hidden = [
    ];

    // Model relationships
    public function subject()
    {
    return $this->belongsTo(Subject_Teacher::class, 'subject_teacher', 'id');
    }
    public function createdBy()
    {
    return $this->belongsTo(User::class, 'createdById', 'id');
    }
    public function approvedBy()
    {
    return $this->belongsTo(User::class, 'approvedBy', 'id');
    }
}
