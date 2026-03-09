<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Donations extends Model
{
    protected $fillable = [
        'donor_id',
        'hospital_id',
        'screening_id',
        'donation_date',
        'status'
    ];

    public function donor()
    {
        return $this->belongsTo(Donors::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function hospital()
    {
        return $this->belongsTo(Hospitals::class);
    }

    public function screening()
    {
        return $this->belongsTo(DonoresScreening::class, 'screening_id');
    }

    public function bloodBags()
    {
        return $this->hasMany(BloodBags::class);
    }
}
