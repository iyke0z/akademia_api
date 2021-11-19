<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;

class Subject_Teacher extends Model
{
    use HasFactory, SoftDeletes, HasApiTokens;

    protected $fillable = [
        'subjectid',
        'tutorid',
        'createdById'
    ];

    public function subject(){
        return $this->belongsTo(Subject::class, 'subjectid');
    }

    public function teacher(){
        return $this->belongsTo(User::class, 'tutorid');
    }

    public function createdBy(){
        return $this->belongsTo(User::class, 'createdByiD');
    }
}
