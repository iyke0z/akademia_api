<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;

class Result extends Model
{
    use HasFactory, SoftDeletes, HasApiTokens;

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
    public function resultType(){
        return $this->belongsTo(ResultType::class, 'restult_typeid');
    }
    public function student(){
        return $this->belongsTo(User::class, 'studentid');
    }
    public function academicYear(){
        return $this->belongsTo(Term_Session_Year::class, 'academic_periodid');
    }
    public function subject(){
        return $this->belongsTo(Subject_ClassGroup::class, 'subjectid');
    }
    public function createdBy(){
        return $this->belongsTo(User::class, 'createdById');
    }
}
