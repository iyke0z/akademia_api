<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;

class PhotoJournal extends Model
{
    use HasFactory;
    use SoftDeletes;
    use HasApiTokens;

    protected $fillable = [
        'photo',
        'eventid',
        'approvedBy',
    ];


    protected $hidden = [
    ];

    // Model relationships
    public function branch()
    {
    return $this->belongsTo(Calender::class, 'eventid', 'id');
    }
    public function approvedBy()
    {
    return $this->belongsTo(User::class, 'approvedBy', 'id');
    }
}
