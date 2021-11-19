<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;

class Experience extends Model
{
    use HasFactory;
    use SoftDeletes;
    use HasApiTokens;

    protected $fillable = [
        'staffid',
        'jobtitle',
        'organization',
        'refno',
        'from',
        'to',
    ];


    protected $hidden = [
    ];

    // Model relationships
    public function staff()
    {
    return $this->belongsTo(User::class, 'staffid', 'id');
    }
}
