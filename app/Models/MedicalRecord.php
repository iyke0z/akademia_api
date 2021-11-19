<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;

class MedicalRecord extends Model
{
    use HasFactory;
    use SoftDeletes;
    use HasApiTokens;

    protected $fillable = [
        'userid',
        'genotype',
        'blood_group',
        'height',
        'weight',
        'comment',
        'createdById',
    ];


    protected $hidden = [
    ];

    // Model relationships
    public function user()
    {
    return $this->belongsTo(User::class, 'userid', 'id');
    }
    public function create()
    {
    return $this->belongsTo(User::class, 'createdById', 'id');
    }
}
