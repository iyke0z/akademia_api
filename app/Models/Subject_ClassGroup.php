<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;

class Subject_ClassGroup extends Model
{
    use HasFactory, SoftDeletes, HasApiTokens;

    protected $fillable = ['subjectid', 'classgroupid', 'createdById'];

    public function subject(){
        return $this->belongsTo(Subject::class, 'subjectid');
    }

    public function classgroup(){
        return $this->belongsTo(ClassGroup::class, 'classgroupid');
    }

    public function createdBy(){
        return $this->belongsTo(User::class, 'createdById' );
    }
}
