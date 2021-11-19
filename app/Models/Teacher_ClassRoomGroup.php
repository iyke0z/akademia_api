<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;

class Teacher_ClassRoomGroup extends Model
{
    use HasFactory, SoftDeletes, HasApiTokens;

    protected $fillable = [
        'teacherid',
        'classroomgroupid',
        'createdById'
    ];

    public function teacher(){
        return $this->belongsTo(User::class, 'teacherid');
    }

    public function classRoomGroup(){
        return $this->belongsTo(ClassRoomGroup::class, 'classroomgroupid');
    }

    public function createdBy(){
        return $this->belongsTo(User::class, 'createdById');
    }
}
