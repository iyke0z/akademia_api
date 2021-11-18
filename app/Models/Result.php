<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Passport\HasApiTokens;

class Result extends Model
{
    use HasFactory;
    use SoftDeletes;
    use HasApiTokens;
    
    protected $fillable = [
        'restult_typeid',
        'studentid',
        'academic_periodid',
        'subjectid',
        'score_obtained',
        'createdById',
    ];


    protected $hidden = [
    ];

    // Model relationships
    public function resultType()
    {
    return $this->belongsTo(RequestType::class, 'branchid', 'id');
    }
    public function student()
    {
    return $this->belongsTo(User::class, 'studentid', 'id');
    }
    public function academicYear()
    {
    return $this->belongsTo(Term_Session_Year::class, 'academic_periodid', 'id');
    }
    public function subject()
    {
    return $this->belongsTo(Subject::class, 'subjectid', 'id');
    }
    public function created()
    {
    return $this->belongsTo(User::class, 'createdById', 'id');
    }
}
