<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DonoresScreening extends Model
{
    protected $fillable = [
        'donor_id',
        'screening_date',
        'weight',
        'blood_pressure',
        'hemoglobin_level',
        'eligibility_status',
        'notes'
    ];

    public function donor()
    {
        return $this->belongsTo(Donors::class);
    }

    public function donations()
    {
        return $this->hasMany(Donations::class, 'screening_id');
    }
}
