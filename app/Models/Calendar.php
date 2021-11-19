<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;

class Calendar extends Model
{
    use HasFactory;
    use SoftDeletes;
    use HasApiTokens;

    protected $fillable = [
        'eventtypeid',
        'event_title',
        'description',
        'priorityid',
        'approvedBy',
    ];


    protected $hidden = [
    ];

    // Model relationships
    public function eventType()
    {
    return $this->belongsTo(EventType::class, 'eventtypeid', 'id');
    }
    public function priority()
    {
    return $this->belongsTo(Priority::class, 'priorityid', 'id');
    }
    public function approved()
    {
    return $this->belongsTo(User::class, 'approvedBy', 'id');
    }
}
