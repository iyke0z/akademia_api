<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Passport\HasApiTokens;

class ClassRoomGroup extends Model
{
    use HasFactory;
    use SoftDeletes;
    use HasApiTokens;
    
    protected $fillable = [
        'classgroupid',
        'classroomid',
        'createdById',
    ];


    protected $hidden = [
    ];

    // Model relationships
    public function classroom()
    {
    return $this->belongsTo(ClassRoom::class, 'classroomid', 'id');
    }
    public function user()
    {
    return $this->belongsTo(User::class, 'createdById', 'id');
    }
    public function classgrp()
    {
    return $this->belongsTo(ClassGroup::class, 'classgroupid', 'id');
    }
}
