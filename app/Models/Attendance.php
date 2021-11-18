<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Passport\HasApiTokens;

class Attendance extends Model
{
    use HasFactory;
    use SoftDeletes;
    use HasApiTokens;
    
    protected $fillable = [
        'studentuseraccount',
        'classid',
        'subject',
        'status',
        'date',
        'absentedBy',
    ];


    protected $hidden = [
    ];

    // Model relationships
    public function subject()
    {
    return $this->belongsTo(Subject_ClassGroup::class, 'subject', 'id');
    }
    public function classRoom()
    {
    return $this->belongsTo(ClassRoomGroup::class, 'classid', 'id');
    }
    public function student()
    {
    return $this->belongsTo(User::class, 'studentuseraccount', 'id');
    }
    public function staff()
    {
    return $this->belongsTo(User::class, 'absentedBy', 'id');
    }
}
