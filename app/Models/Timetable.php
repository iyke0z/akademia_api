<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;

class Timetable extends Model
{
    use HasFactory, SoftDeletes, HasApiTokens;
    protected $fillable = [
        'classRoomGroupid',
        'classGroupId',
        'timetabletype',
        'subjectid',
        'from',
        'to',
        'day',
        'createdById'
    ];

    public function classRoomGroup(){
        return $this->belongsTo(ClassRoomGroup::class, 'classRoomGroupid');
    }

    public function classGroup(){
        return $this->belongsTo(ClassGroup::class, 'classGroupId');
    }

    public function tabletype(){
        return $this->belongsTo(TimetableType::class, 'timetabletype' );
    }

    public function subject(){
        return $this->belongsTo(Subject::class, 'subjectid');
    }

    public function createdBy(){
        return $this->belongsTo(User::class, 'createById');
    }
}
