<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'level',
        'syllabus',
        'duration_weeks',
        'price',
        'status',
        'meta_data'
    ];

    public function classSessions()
    {
        return $this->hasMany(ClassSession::class);
    }

    public function enrollments()
    {
        return $this->hasMany(Enrollment::class);
    }
}
