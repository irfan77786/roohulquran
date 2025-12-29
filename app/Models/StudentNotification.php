<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentNotification extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'type',
        'title',
        'message',
        'icon',
        'color',
        'read',
        'read_at',
        'data'
    ];

    protected $casts = [
        'read' => 'boolean',
        'read_at' => 'datetime',
        'data' => 'array'
    ];

    /**
     * Get the student that owns the notification
     */
    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    /**
     * Scope to get unread notifications
     */
    public function scopeUnread($query)
    {
        return $query->where('read', false);
    }

    /**
     * Scope to get read notifications
     */
    public function scopeRead($query)
    {
        return $query->where('read', true);
    }

    /**
     * Mark notification as read
     */
    public function markAsRead()
    {
        if (!$this->read) {
            $this->update([
                'read' => true,
                'read_at' => now()
            ]);
        }
    }

    /**
     * Mark as unread
     */
    public function markAsUnread()
    {
        $this->update([
            'read' => false,
            'read_at' => null
        ]);
    }

    /**
     * Create a notification for a student
     */
    public static function createNotification($studentId, $type, $title, $message, $icon = null, $color = 'primary', $data = null)
    {
        return self::create([
            'student_id' => $studentId,
            'type' => $type,
            'title' => $title,
            'message' => $message,
            'icon' => $icon,
            'color' => $color,
            'data' => $data,
            'read' => false
        ]);
    }
}

