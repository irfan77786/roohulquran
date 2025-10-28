<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Attendance;
use App\Models\ClassSession;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AttendanceController extends Controller
{
    public function index(Request $request)
    {
        // Get filter parameters
        $selectedDate = $request->input('date', today()->format('Y-m-d'));
        $classSessionId = $request->input('session_id');

        // Get all class sessions
        $sessions = ClassSession::with(['course', 'teacher'])
            ->where('status', '!=', 'cancelled')
            ->latest()
            ->get();

        // Get selected session
        $selectedSession = $classSessionId ? ClassSession::with(['course', 'teacher'])->find($classSessionId) : null;

        // If session selected, get enrollments and attendance
        $enrollments = [];
        $attendanceRecords = collect();

        if ($selectedSession) {
            $enrollments = $selectedSession->enrollments()
                ->with('student')
                ->where('status', 'active')
                ->get();

            $attendanceRecords = Attendance::where('class_session_id', $classSessionId)
                ->whereDate('date', $selectedDate)
                ->get()
                ->keyBy('student_id');
        }

        return view('admin.attendance.index', compact(
            'sessions',
            'selectedSession',
            'enrollments',
            'attendanceRecords',
            'selectedDate',
            'classSessionId'
        ));
    }

    public function mark(Request $request)
    {
        $validated = $request->validate([
            'student_id' => 'required|exists:students,id',
            'class_session_id' => 'required|exists:class_sessions,id',
            'date' => 'required|date',
            'status' => 'required|in:present,late,absent,excused'
        ]);

        Attendance::updateOrCreate(
            [
                'student_id' => $validated['student_id'],
                'class_session_id' => $validated['class_session_id'],
                'date' => $validated['date']
            ],
            [
                'status' => $validated['status'],
                'time' => now()->format('H:i:s')
            ]
        );

        if ($request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => 'Attendance marked successfully'
            ]);
        }

        return back()->with('success', 'Attendance marked successfully');
    }

    public function history(Request $request)
    {
        // Get filter parameters
        $studentId = $request->input('student_id');
        $sessionId = $request->input('session_id');
        $startDate = $request->input('start_date', Carbon::now()->subMonth()->format('Y-m-d'));
        $endDate = $request->input('end_date', Carbon::now()->format('Y-m-d'));

        $query = Attendance::with(['student', 'classSession.course', 'classSession.teacher'])
            ->whereBetween('date', [$startDate, $endDate]);

        if ($studentId) {
            $query->where('student_id', $studentId);
        }

        if ($sessionId) {
            $query->where('class_session_id', $sessionId);
        }

        $attendance = $query->orderBy('date', 'desc')
            ->orderBy('time', 'desc')
            ->paginate(20);

        // Get students for filter
        $students = Student::where('status', 'active')->orderBy('name')->get();

        // Get sessions for filter
        $sessions = ClassSession::with(['course', 'teacher'])
            ->where('status', '!=', 'cancelled')
            ->latest()
            ->get();

        // Calculate statistics
        $stats = $this->calculateAttendanceStats($studentId, $sessionId, $startDate, $endDate);

        return view('admin.attendance.history', compact(
            'attendance',
            'students',
            'sessions',
            'stats',
            'studentId',
            'sessionId',
            'startDate',
            'endDate'
        ));
    }

    private function calculateAttendanceStats($studentId = null, $sessionId = null, $startDate = null, $endDate = null)
    {
        $query = Attendance::query();

        if ($studentId) {
            $query->where('student_id', $studentId);
        }

        if ($sessionId) {
            $query->where('class_session_id', $sessionId);
        }

        if ($startDate && $endDate) {
            $query->whereBetween('date', [$startDate, $endDate]);
        }

        $total = $query->count();
        $present = $query->where('status', 'present')->count();
        $late = $query->where('status', 'late')->count();
        $absent = $query->where('status', 'absent')->count();
        $excused = $query->where('status', 'excused')->count();

        return [
            'total' => $total,
            'present' => $present,
            'late' => $late,
            'absent' => $absent,
            'excused' => $excused,
            'attendance_rate' => $total > 0 ? round((($present + $late + $excused) / $total) * 100, 1) : 0
        ];
    }
}
