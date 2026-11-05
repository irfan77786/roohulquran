<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminNotification extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'title',
        'message',
        'icon',
        'color',
        'notifiable_type',
        'notifiable_id',
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
     * Check if notification is read
     */
    public function isRead()
    {
        return $this->read;
    }

    /**
     * Polymorphic relation
     */
    public function notifiable()
    {
        return $this->morphTo();
    }

    /**
     * Create a notification
     */
    public static function createNotification($type, $title, $message, $icon = null, $color = 'primary', $data = null, $notifiableType = null, $notifiableId = null)
    {
        return self::create([
            'type' => $type,
            'title' => $title,
            'message' => $message,
            'icon' => $icon,
            'color' => $color,
            'notifiable_type' => $notifiableType,
            'notifiable_id' => $notifiableId,
            'data' => $data
        ]);
    }
}
