<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BloodRequests extends Model
{
     protected $fillable = [
        'hospital_id',
        'requested_by',
        'blood_type',
        'units_needed',
        'urgency',
        'status',
        'request_date',
        'approved_by',
        'approved_at',
    ];

    public function hospital()
    {
        return $this->belongsTo(Hospitals::class);
    }
    public function requester()
    {
        return $this->belongsTo(User::class, 'requested_by');
    }

    public function approver()
    {
        return $this->belongsTo(User::class, 'approved_by');
    }
}
