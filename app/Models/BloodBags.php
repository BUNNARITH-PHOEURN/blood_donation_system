<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BloodBags extends Model
{
     protected $fillable = [
        'donation_id',
        'bag_code',
        'blood_type',
        'expiration_date',
        'status'
    ];

    public function donation()
    {
        return $this->belongsTo(Donations::class);
    }

    public function bloodTests()
    {
        return $this->hasMany(BloodTests::class);
    }

    protected static function boot()
{
    parent::boot();

    static::creating(function ($bloodBag) {

        $today = now()->format('Ymd');

        $countToday = self::whereDate('created_at', now()->toDateString())->count() + 1;

        $serial = str_pad($countToday, 4, '0', STR_PAD_LEFT);

        $bloodBag->bag_code = 'BB-' . $today . '-' . $serial;
    });
}
}
