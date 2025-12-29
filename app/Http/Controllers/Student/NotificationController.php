<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\StudentNotification;
use App\Helpers\CurrencyHelper;
use App\Helpers\TimezoneHelper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class NotificationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:student');
    }

    /**
     * Get all notifications for the student
     */
    public function index()
    {
        $student = Auth::guard('student')->user();
        $notifications = StudentNotification::where('student_id', $student->id)
            ->latest()
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
        $student = Auth::guard('student')->user();
        $count = StudentNotification::where('student_id', $student->id)->unread()->count();
        return response()->json(['count' => $count]);
    }

    /**
     * Mark notification as read
     */
    public function markAsRead($id)
    {
        $student = Auth::guard('student')->user();
        $notification = StudentNotification::where('student_id', $student->id)->findOrFail($id);
        $notification->markAsRead();

        return response()->json(['success' => true]);
    }

    /**
     * Mark all notifications as read
     */
    public function markAllAsRead()
    {
        $student = Auth::guard('student')->user();
        StudentNotification::where('student_id', $student->id)->unread()->update([
            'read' => true,
            'read_at' => now()
        ]);

        return response()->json(['success' => true]);
    }

    /**
     * Get all notifications page
     */
    public function all(Request $request)
    {
        $student = Auth::guard('student')->user();
        $query = StudentNotification::where('student_id', $student->id);

        // Filter by read/unread
        if ($request->filled('read_status')) {
            if ($request->read_status == 'read') {
                $query->where('read', true);
            } elseif ($request->read_status == 'unread') {
                $query->where('read', false);
            }
        }

        // Filter by type
        if ($request->filled('type')) {
            $query->where('type', $request->type);
        }

        // Date range filter
        if ($request->filled('date_from')) {
            $query->whereDate('created_at', '>=', $request->date_from);
        }
        if ($request->filled('date_to')) {
            $query->whereDate('created_at', '<=', $request->date_to);
        }

        // Search filter
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                  ->orWhere('message', 'like', "%{$search}%");
            });
        }

        $notifications = $query->latest()->paginate(20)->withQueryString();

        // Get unique types for filter
        $types = StudentNotification::where('student_id', $student->id)
            ->distinct()
            ->pluck('type')
            ->filter()
            ->values();

        // Get currency and timezone
        $currency = CurrencyHelper::getCurrencyFromCountry($student->country);
        $currencySymbol = CurrencyHelper::getCurrencySymbol($currency);
        $timezone = TimezoneHelper::getTimezoneFromCountry($student->country);
        $currentTime = Carbon::now($timezone);

        return view('student.notifications', compact('notifications', 'types', 'student', 'currency', 'currencySymbol', 'timezone', 'currentTime'));
    }
}
