<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Student extends Authenticatable
{
    use HasFactory, SoftDeletes, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'whatsapp',
        'country',
        'city',
        'timezone',
        'start_time',
        'end_time',
        'teacher_id',
        'gender',
        'date_of_birth',
        'guardian_name',
        'guardian_phone',
        'notes',
        'status',
        'referral_source'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'date_of_birth' => 'date',
        'email_verified_at' => 'datetime',
        'start_time' => 'datetime:H:i',
        'end_time' => 'datetime:H:i',
    ];

    public function enrollments()
    {
        return $this->hasMany(Enrollment::class);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }

    public function attendance()
    {
        return $this->hasMany(Attendance::class);
    }

    public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }

    public function notifications()
    {
        return $this->hasMany(StudentNotification::class);
    }

    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }

    /**
     * Get currency based on student's country
     */
    public function getCurrencyAttribute()
    {
        if (!$this->country) {
            return config('currencies.default_currency', 'USD');
        }

        $countryToCurrency = config('currencies.country_to_currency', []);
        return $countryToCurrency[$this->country] ?? config('currencies.default_currency', 'USD');
    }

    /**
     * Get currency symbol based on student's country
     */
    public function getCurrencySymbolAttribute()
    {
        $currency = $this->currency;
        $currencies = config('currencies.currencies', []);
        return $currencies[$currency]['symbol'] ?? '$';
    }
}
