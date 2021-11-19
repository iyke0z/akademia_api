<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;

class Councelling extends Model
{
    use HasFactory;
    use SoftDeletes;
    use HasApiTokens;

    protected $fillable = [
        'userid',
        'councellorid',
        'subject',
        'message',
    ];


    protected $hidden = [
    ];

    // Model relationships
    public function councellor()
    {
    return $this->belongsTo(User::class, 'councellorid', 'id');
    }
    public function sender()
    {
    return $this->belongsTo(User::class, 'userid', 'id');
    }
}
