<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role', 
        'profile', 
        'phone', 
        'hospital_id'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

   public function hospital()
    {
        return $this->belongsTo(Hospitals::class);
    }

    public function donorProfile()
    {
        return $this->hasOne(Donors::class, 'user_id');
    }

    public function createdDonors()
    {
        return $this->hasMany(Donors::class, 'created_by');
    }

    public function approvedDonationRequests()
    {
        return $this->hasMany(DonationRequests::class, 'approved_by');
    }

    public function bloodTests()
    {
        return $this->hasMany(BloodTests::class, 'tested_by');
    }
}
