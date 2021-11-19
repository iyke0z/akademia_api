<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;

class Student_ClassRoomGroup extends Model
{
    use HasFactory, SoftDeletes, HasApiTokens;

    protected $fillable = ['studentid',
    'classroomgroupid',
    'createdById'];

    public function student(){
        return $this->belongsTo(User::class, 'studentid');
    }

    public function classroomgroup(){
        return $this->belongsTo(ClassRoomGroup::class, 'classroomgroupid');
    }

    public function createdBy(){
        return $this->belongsTo(User::class, 'createdById');
    }
}
