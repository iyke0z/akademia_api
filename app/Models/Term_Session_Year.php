<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;

class Term_Session_Year extends Model
{
    use HasFactory, SoftDeletes, HasApiTokens;

    protected $fillable = [
        'termid',
        'sessionid',
        'yearid',
        'createdById',
    ];

    public function term(){
        return $this->belongsTo(Term::class, 'termid');
    }

    public function session(){
        return $this->belongsTo(AcademicSession::class, 'sessionid');
    }

    public function year(){
        return $this->belongsTo(AcademicYear::class, 'yearid');
    }

    public function createdBy(){
        return $this->belongsTo(User::class, 'createdById');
    }
}
