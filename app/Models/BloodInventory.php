<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BloodInventory extends Model
{
    protected $fillable = [
        'hospital_id',
        'blood_type',
        'units_available',
        'last_updated'
    ];

    public function hospital()
    {
        return $this->belongsTo(Hospitals::class);
    }
}
