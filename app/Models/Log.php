<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;

class Log extends Model
{
    use HasFactory;
    use SoftDeletes;
    use HasApiTokens;

    protected $fillable = [
        'userid',
        'action',
    ];


    protected $hidden = [
    ];

    // Model relationships
    public function user()
    {
    return $this->belongsTo(User::class, 'userid', 'id');
    }
}
