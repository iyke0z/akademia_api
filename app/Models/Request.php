<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Passport\HasApiTokens;

class Request extends Model
{
    use HasFactory;
    use SoftDeletes;
    use HasApiTokens;
    
    protected $fillable = [
        'no_of_days',
        'startdate',
        'enddate',
        'approval_status',
        'createdById',
        'approvedBy',
    ];


    protected $hidden = [
    ];

    // Model relationships
    public function created()
    {
    return $this->belongsTo(User::class, 'createdById', 'id');
    }
    public function approved()
    {
    return $this->belongsTo(User::class, 'approvedBy', 'id');
    }
}
