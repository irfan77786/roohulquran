<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Attendance;
use App\Models\ClassSession;
use App\Models\Student;
use App\Models\Course;
use App\Models\Enrollment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AttendanceController extends Controller
{
    public function index(Request $request)
    {
        // Get filter parameters
        $selectedDate = $request->input('date', today()->format('Y-m-d'));
        $courseId = $request->input('course_id');

        // Get all courses
        $courses = Course::where('status', 'active')
            ->orderBy('name')
            ->get();

        // Get selected course
        $selectedCourse = $courseId ? Course::find($courseId) : null;

        // If course selected, get all students enrolled in that course
        $enrollments = [];
        $attendanceRecords = collect();

        if ($selectedCourse) {
            // Get all active enrollments for this course
            $enrollments = Enrollment::with(['student', 'classSession'])
                ->where('course_id', $courseId)
                ->where('status', 'active')
                ->get();

            // Get attendance records for all students in this course for the selected date
            $studentIds = $enrollments->pluck('student_id')->toArray();
            
            if (!empty($studentIds)) {
                // Get all class sessions for this course
                $sessionIds = ClassSession::where('course_id', $courseId)
                    ->where('status', '!=', 'cancelled')
                    ->pluck('id')
                    ->toArray();

                if (!empty($sessionIds)) {
                    $attendanceRecords = Attendance::whereIn('student_id', $studentIds)
                        ->whereIn('class_session_id', $sessionIds)
                        ->whereDate('date', $selectedDate)
                        ->get()
                        ->keyBy('student_id');
                }
            }
        }

        return view('admin.attendance.index', compact(
            'courses',
            'selectedCourse',
            'enrollments',
            'attendanceRecords',
            'selectedDate',
            'courseId'
        ));
    }

    public function mark(Request $request)
    {
        $validated = $request->validate([
            'student_id' => 'required|exists:students,id',
            'course_id' => 'required|exists:courses,id',
            'date' => 'required|date',
            'status' => 'required|in:present,late,absent,excused'
        ]);

        // Get the student's enrollment for this course
        $enrollment = Enrollment::where('student_id', $validated['student_id'])
            ->where('course_id', $validated['course_id'])
            ->where('status', 'active')
            ->first();

        if (!$enrollment) {
            if ($request->ajax()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Student is not enrolled in this course'
                ], 422);
            }
            return back()->with('error', 'Student is not enrolled in this course');
        }

        // Get the class session for this enrollment
        $classSessionId = $enrollment->class_session_id;
        
        // If no class session assigned, try to get any active session for this course
        if (!$classSessionId) {
            $classSession = ClassSession::where('course_id', $validated['course_id'])
                ->where('status', '!=', 'cancelled')
                ->first();
            
            if ($classSession) {
                $classSessionId = $classSession->id;
            } else {
                if ($request->ajax()) {
                    return response()->json([
                        'success' => false,
                        'message' => 'No active class session found for this course'
                    ], 422);
                }
                return back()->with('error', 'No active class session found for this course');
            }
        }

        // Check if attendance is already marked for this student on this date (regardless of session_id)
        // This prevents duplicate entries when marking from different pages with different session IDs
        $existingAttendance = Attendance::where('student_id', $validated['student_id'])
            ->whereDate('date', $validated['date'])
            ->first();

        if ($existingAttendance) {
            // Update existing attendance record with new status and correct session ID
            $existingAttendance->update([
                'class_session_id' => $classSessionId,
                'status' => $validated['status'],
                'time' => now()
            ]);

            if ($request->ajax()) {
                return response()->json([
                    'success' => true,
                    'message' => 'Attendance updated successfully (was already marked for this date)',
                    'updated' => true,
                    'previous_status' => $existingAttendance->getOriginal('status')
                ]);
            }
            return back()->with('success', 'Attendance updated successfully');
        }

        // Create new attendance record
        Attendance::create([
            'student_id' => $validated['student_id'],
            'class_session_id' => $classSessionId,
            'date' => $validated['date'],
            'status' => $validated['status'],
            'time' => now()
        ]);

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
