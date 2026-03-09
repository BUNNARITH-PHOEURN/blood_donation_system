<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hospitals extends Model
{
    protected $fillable = [
        'name',
        'address',
        'phone',
        'email',
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function donations()
    {
        return $this->hasMany(Donations::class);
    }

    public function donationRequests()
    {
        return $this->hasMany(DonationRequests::class);
    }

    public function bloodInventory()
    {
        return $this->hasMany(BloodInventory::class);
    }

    public function bloodRequests()
    {
        return $this->hasMany(BloodRequests::class);
    }
}
