<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Donors extends Model
{
    protected $fillable = [
        'user_id',
        'blood_type',
        'date_of_birth',
        'gender',
        'is_profile_completed',
        'created_by'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function screenings()
    {
        return $this->hasMany(DonoresScreening::class);
    }

    public function donations()
    {
        return $this->hasMany(Donations::class);
    }

    public function donationRequests()
    {
        return $this->hasMany(DonationRequests::class);
    }
}
