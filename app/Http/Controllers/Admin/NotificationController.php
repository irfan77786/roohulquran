<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AdminNotification;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    /**
     * Get all notifications for the admin
     */
    public function index()
    {
        $notifications = AdminNotification::latest()
            ->take(10)
            ->get()
            ->map(function ($notification) {
                return [
                    'id' => $notification->id,
                    'title' => $notification->title,
                    'message' => $notification->message,
                    'icon' => $notification->icon,
                    'color' => $notification->color,
                    'read' => $notification->read,
                    'time_ago' => $notification->created_at->diffForHumans(),
                    'data' => $notification->data
                ];
            });

        return response()->json($notifications);
    }

    /**
     * Get unread notification count
     */
    public function count()
    {
        $count = AdminNotification::unread()->count();
        return response()->json(['count' => $count]);
    }

    /**
     * Mark notification as read
     */
    public function markAsRead($id)
    {
        $notification = AdminNotification::findOrFail($id);
        $notification->markAsRead();

        return response()->json(['success' => true]);
    }

    /**
     * Mark all notifications as read
     */
    public function markAllAsRead()
    {
        AdminNotification::unread()->update([
            'read' => true,
            'read_at' => now()
        ]);

        return response()->json(['success' => true]);
    }

    /**
     * Delete a notification
     */
    public function destroy($id)
    {
        $notification = AdminNotification::findOrFail($id);
        $notification->delete();

        return response()->json(['success' => true]);
    }
}
