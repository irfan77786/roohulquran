<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Teacher extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'whatsapp',
        'country',
        'city',
        'timezone',
        'qualifications',
        'specializations',
        'bio',
        'hourly_rate',
        'status'
    ];

    public function classSessions()
    {
        return $this->hasMany(ClassSession::class);
    }
}
