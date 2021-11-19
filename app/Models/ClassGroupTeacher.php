<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;

class ClassGroupTeacher extends Model
{
    use HasFactory;
    use SoftDeletes;
    use HasApiTokens;

    protected $fillable = [
        'teacher_subject_id',
        'classgroupid',
        'createdById',
    ];


    protected $hidden = [
    ];

    // Model relationships
    public function teacher()
    {
    return $this->belongsTo(Subject_Teacher::class, 'teacher_subject_id', 'id');
    }
    public function class()
    {
    return $this->belongsTo(ClassGroup::class, 'classgroupid', 'id');
    }
    public function user()
    {
    return $this->belongsTo(User::class, 'createdById', 'id');
    }
}
