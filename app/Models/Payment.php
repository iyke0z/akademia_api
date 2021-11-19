<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;

class Payment extends Model
{
    use HasFactory;
    use SoftDeletes;
    use HasApiTokens;

    protected $fillable = [
        'paymenttypeid',
        'mathodid',
        'studentID',
        'approval_status',
        'approvedBy',
        'paymentmadeBy',
    ];


    protected $hidden = [
    ];

    // Model relationships
    public function paymentType()
    {
    return $this->belongsTo(PaymentType::class, 'paymenttypeid', 'id');
    }
    public function method()
    {
    return $this->belongsTo(PaymentMethod::class, 'mathodid', 'id');
    }
    public function student()
    {
    return $this->belongsTo(Users::class, 'studentID', 'id');
    }
    public function approvedBy()
    {
    return $this->belongsTo(Users::class, 'approvedBy', 'id');
    }
}
