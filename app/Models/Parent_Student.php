<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Passport\HasApiTokens;

class Parent_Student extends Model
{
    use HasFactory;
    use SoftDeletes;
    use HasApiTokens;
    
    protected $fillable = [
        'parentid',
        'studentid',
        'createdBy',
    ];


    protected $hidden = [
    ];

    // Model relationships
    public function parent()
    {
    return $this->belongsTo(User::class, 'parentid', 'id');
    }
    public function student()
    {
    return $this->belongsTo(User::class, 'studentid', 'id');
    }
    public function create()
    {
    return $this->belongsTo(User::class, 'createdBy', 'id');
    }
}
