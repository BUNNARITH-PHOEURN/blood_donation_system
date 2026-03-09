<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DonationRequests extends Model
{
    protected $fillable = [
        'donor_id',
        'hospital_id',
        'requested_date',
        'status',
        'approved_by',
        'approved_at'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function donor()
    {
        return $this->belongsTo(Donors::class);
    }

    public function hospital()
    {
        return $this->belongsTo(Hospitals::class);
    }

    public function approver()
    {
        return $this->belongsTo(User::class, 'approved_by');
    }
    
}
