<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;

class Priority extends Model
{
    use HasFactory;
    use SoftDeletes;
    use HasApiTokens;

    protected $fillable = [
        'priority',
        'createdBy',
    ];


    protected $hidden = [
    ];

    // Model relationships
    public function createdBy(){
        return $this->belongsTo(User::class, 'createdBy');
    }
}
