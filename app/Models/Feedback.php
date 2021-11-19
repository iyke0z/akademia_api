<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;

class Feedback extends Model
{
    use HasFactory;
    use SoftDeletes, HasApiTokens;

    protected $fillable = [
        'fromuserid',
        'subject',
        'message',
        'touserid',
    ];


    protected $hidden = [
    ];

    // Model relationships
    public function fromuser()
    {
    return $this->belongsTo(User::class, 'fromuserid', 'id');
    }
    public function touser()
    {
    return $this->belongsTo(User::class, 'touserid', 'id');
    }
}
