<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'course_id',
        'class_session_id',
        'start_date',
        'end_date',
        'status',
        'fee',
        'referral_source',
        'notes'
    ];

    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date'
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function classSession()
    {
        return $this->belongsTo(ClassSession::class);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }
}
