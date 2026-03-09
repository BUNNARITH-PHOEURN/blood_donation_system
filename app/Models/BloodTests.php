<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BloodTests extends Model
{
    protected $fillable = [
        'blood_bag_id',
        'hiv_result',
        'hepatitis_b_result',
        'hepatitis_c_result',
        'syphilis_result',
        'malaria_result',
        'overall_status',
        'tested_by',
        'tested_at'
    ];

    public function bloodBag()
    {
        return $this->belongsTo(BloodBags::class);
    }

    public function tester()
    {
        return $this->belongsTo(User::class, 'tested_by');
    }
}
