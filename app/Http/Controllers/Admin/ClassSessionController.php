<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ClassSession;
use App\Models\Course;
use App\Models\Teacher;
use App\Models\Enrollment;
use App\Models\Student;
use App\Models\Attendance;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ClassSessionController extends Controller
{
    public function index(Request $request)
    {
        $query = Student::with(['enrollments.course', 'enrollments.classSession.teacher'])
            ->whereHas('enrollments', function($q) use ($request) {
                $q->where('status', 'active');
                // Filter by course
                if ($request->filled('course_id')) {
                    $q->where('course_id', $request->course_id);
                }
            });

        // Search filter
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('email', 'like', "%{$search}%");
            });
        }

        // Filter by teacher
        if ($request->filled('teacher_id')) {
            $query->whereHas('enrollments.classSession', function($q) use ($request) {
                $q->where('teacher_id', $request->teacher_id);
            });
        }

        $students = $query->latest()->get();
        
        $sessions = ClassSession::with(['course', 'teacher'])->latest()->paginate(15);
        $courses = Course::where('status', 'active')->get();
        $teachers = Teacher::where('status', 'active')->get();
        $enrollments = Enrollment::with(['student', 'course', 'classSession.teacher'])
            ->where('status', 'active')
            ->latest()
            ->get();

        return view('admin.sessions.index', compact('sessions', 'courses', 'teachers', 'enrollments', 'students'));
    }
    
    public function studentSessions(Student $student, Request $request)
    {
        // Get course IDs from student's active enrollments
        $courseIds = $student->enrollments()
            ->where('status', 'active')
            ->pluck('course_id')
            ->toArray();
        
        $sessions = collect();
        $selectedMonth = $request->input('month');
        $selectedYear = $request->input('year');
        
        $sessionsByDate = [];
        $calendarData = [];
        
        // Only fetch sessions if month and year are provided
        if ($request->has('month') && $request->has('year') && $selectedMonth && $selectedYear) {
            $startDate = Carbon::create($selectedYear, $selectedMonth, 1)->startOfMonth();
            $endDate = $startDate->copy()->endOfMonth();
            
            $sessions = ClassSession::whereIn('course_id', $courseIds)
                ->whereBetween('start_date', [$startDate, $endDate])
                ->with(['course', 'teacher'])
                ->orderBy('start_date')
                ->orderBy('start_time')
                ->get();
            
            // Get all attendance records for this student in this month
            $attendanceRecords = Attendance::where('student_id', $student->id)
                ->whereBetween('date', [$startDate, $endDate])
                ->with('classSession')
                ->get()
                ->keyBy(function($attendance) {
                    return $attendance->class_session_id . '_' . $attendance->date->format('Y-m-d');
                });
            
            // Group sessions by date and attach attendance
            foreach ($sessions as $session) {
                if ($session->start_date) {
                    $dateKey = $session->start_date->format('Y-m-d');
                    if (!isset($sessionsByDate[$dateKey])) {
                        $sessionsByDate[$dateKey] = [];
                    }
                    // Attach attendance to session
                    $attendanceKey = $session->id . '_' . $dateKey;
                    $session->attendance = $attendanceRecords->get($attendanceKey);
                    $sessionsByDate[$dateKey][] = $session;
                }
            }
            
            // Build calendar data
            $firstDay = $startDate->copy()->startOfWeek(Carbon::SUNDAY);
            $lastDay = $endDate->copy()->endOfWeek(Carbon::SATURDAY);
            $currentDay = $firstDay->copy();
            
            while ($currentDay->lte($lastDay)) {
                $dateKey = $currentDay->format('Y-m-d');
                $daySessions = $sessionsByDate[$dateKey] ?? [];
                $attendanceStatus = null;
                foreach ($daySessions as $session) {
                    if ($session->attendance) {
                        $attendanceStatus = $session->attendance->status;
                        break; // Use first session's attendance status
                    }
                }
                
                $calendarData[] = [
                    'date' => $currentDay->copy(),
                    'isCurrentMonth' => $currentDay->month == $selectedMonth && $currentDay->year == $selectedYear,
                    'isToday' => $currentDay->isToday(),
                    'sessions' => $daySessions,
                    'hasAttendance' => $attendanceStatus !== null,
                    'attendanceStatus' => $attendanceStatus
                ];
                $currentDay->addDay();
            }
        }
        
        $student->load(['enrollments.course', 'enrollments.classSession.teacher']);
        
        return view('admin.sessions.student-sessions', compact('student', 'sessions', 'sessionsByDate', 'calendarData', 'selectedMonth', 'selectedYear'));
    }
    
    public function markTodayAttendance(Student $student, Request $request)
    {
        // Get course IDs from student's active enrollments
        $courseIds = $student->enrollments()
            ->where('status', 'active')
            ->pluck('course_id')
            ->toArray();
        
        // Find today's session for this student
        $today = Carbon::today();
        $todaySession = ClassSession::whereIn('course_id', $courseIds)
            ->whereDate('start_date', $today)
            ->where('status', '!=', 'cancelled')
            ->first();
        
        if (!$todaySession) {
            if ($request->ajax()) {
                return response()->json([
                    'success' => false,
                    'message' => 'No session found for today'
                ]);
            }
            return back()->with('error', 'No session found for today');
        }
        
        // Check if attendance already marked for this student on this date (regardless of session_id)
        $existingAttendance = Attendance::where('student_id', $student->id)
            ->whereDate('date', $today)
            ->first();
        
        if ($existingAttendance) {
            // Update existing attendance with correct session ID
            $existingAttendance->update([
                'class_session_id' => $todaySession->id,
                'status' => 'present',
                'time' => now()
            ]);
            
            if ($request->ajax()) {
                return response()->json([
                    'success' => true,
                    'message' => 'Attendance updated successfully (was already marked for today)'
                ]);
            }
            return back()->with('success', 'Attendance updated successfully');
        }
        
        // Mark attendance as present
        Attendance::create([
            'student_id' => $student->id,
            'class_session_id' => $todaySession->id,
            'date' => $today,
            'time' => now(),
            'status' => 'present'
        ]);
        
        if ($request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => 'Attendance marked successfully for today\'s session'
            ]);
        }
        
        return back()->with('success', 'Attendance marked successfully for today\'s session');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'course_id' => 'required|exists:courses,id',
            'teacher_id' => 'nullable|exists:teachers,id',
            'name' => 'required|string|max:255',
            'day_of_week' => 'nullable|string',
            'start_time' => 'nullable',
            'end_time' => 'nullable',
            'capacity' => 'nullable|integer',
            'status' => 'required|in:scheduled,ongoing,completed,cancelled'
        ]);

        ClassSession::create($validated);

        if ($request->ajax()) {
            return response()->json(['success' => true, 'message' => 'Class session created successfully']);
        }

        return redirect()->route('admin.sessions.index')->with('success', 'Class session created successfully');
    }

    public function update(Request $request, ClassSession $session)
    {
        $validated = $request->validate([
            'course_id' => 'required|exists:courses,id',
            'teacher_id' => 'nullable|exists:teachers,id',
            'name' => 'required|string|max:255',
            'day_of_week' => 'nullable|string',
            'start_time' => 'nullable',
            'end_time' => 'nullable',
            'capacity' => 'nullable|integer',
            'status' => 'required|in:scheduled,ongoing,completed,cancelled'
        ]);

        $session->update($validated);

        if ($request->ajax()) {
            return response()->json(['success' => true, 'message' => 'Class session updated successfully']);
        }

        return redirect()->route('admin.sessions.index')->with('success', 'Class session updated successfully');
    }

    public function destroy(ClassSession $session)
    {
        $session->delete();
        return redirect()->route('admin.sessions.index')->with('success', 'Class session deleted successfully');
    }

    public function generateMonthlySessions(Request $request)
    {
        $validated = $request->validate([
            'enrollment_id' => 'required|exists:enrollments,id',
            'month' => 'required|integer|min:1|max:12',
            'year' => 'required|integer|min:' . date('Y') . '|max:' . (date('Y') + 1),
            'days_of_week' => 'required|array|min:1',
            'days_of_week.*' => 'required|in:Monday,Tuesday,Wednesday,Thursday,Friday,Saturday,Sunday',
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i|after:start_time',
            'teacher_id' => 'nullable|exists:teachers,id',
            'meeting_link' => 'nullable|string|max:255',
        ]);

        $enrollment = Enrollment::with(['student', 'course'])->findOrFail($validated['enrollment_id']);
        
        // Get the first day of the month
        $startDate = Carbon::create($validated['year'], $validated['month'], 1);
        $endDate = $startDate->copy()->endOfMonth();
        
        // Map day names to Carbon day constants
        $dayMap = [
            'Monday' => Carbon::MONDAY,
            'Tuesday' => Carbon::TUESDAY,
            'Wednesday' => Carbon::WEDNESDAY,
            'Thursday' => Carbon::THURSDAY,
            'Friday' => Carbon::FRIDAY,
            'Saturday' => Carbon::SATURDAY,
            'Sunday' => Carbon::SUNDAY,
        ];
        
        $daysOfWeek = array_map(function($day) use ($dayMap) {
            return $dayMap[$day];
        }, $validated['days_of_week']);
        
        $sessionsCreated = 0;
        $currentDate = $startDate->copy();
        
        // Generate sessions for each matching day in the month
        while ($currentDate->lte($endDate)) {
            if (in_array($currentDate->dayOfWeek, $daysOfWeek)) {
                // Check if session already exists for this date and enrollment
                $existingSession = ClassSession::where('course_id', $enrollment->course_id)
                    ->whereDate('start_date', $currentDate->toDateString())
                    ->where('start_time', $validated['start_time'])
                    ->first();
                
                if (!$existingSession) {
                    // Get teacher from request, or from enrollment's classSession, or leave null
                    $teacherId = $validated['teacher_id'] ?? null;
                    if (!$teacherId && $enrollment->classSession && $enrollment->classSession->teacher_id) {
                        $teacherId = $enrollment->classSession->teacher_id;
                    }
                    
                    ClassSession::create([
                        'course_id' => $enrollment->course_id,
                        'teacher_id' => $teacherId,
                        'name' => $enrollment->course->name . ' - ' . $currentDate->format('M d, Y'),
                        'description' => 'Monthly generated session for ' . $enrollment->student->name,
                        'type' => 'individual',
                        'capacity' => 1,
                        'enrolled_count' => 0,
                        'day_of_week' => $currentDate->format('l'),
                        'start_time' => $validated['start_time'],
                        'end_time' => $validated['end_time'],
                        'start_date' => $currentDate->toDateString(),
                        'end_date' => $currentDate->toDateString(),
                        'meeting_link' => $validated['meeting_link'] ?? null,
                        'status' => 'scheduled',
                    ]);
                    $sessionsCreated++;
                }
            }
            $currentDate->addDay();
        }
        
        if ($request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => "Successfully generated {$sessionsCreated} sessions for " . $startDate->format('F Y')
            ]);
        }
        
        return redirect()->route('admin.sessions.index')
            ->with('success', "Successfully generated {$sessionsCreated} sessions for " . $startDate->format('F Y'));
    }
    
    public function markSessionAttendance(Student $student, Request $request)
    {
        $validated = $request->validate([
            'class_session_id' => 'required|exists:class_sessions,id',
            'date' => 'required|date',
            'status' => 'required|in:present,late,absent,excused',
            'remarks' => 'nullable|string|max:500'
        ]);
        
        // Verify the session belongs to student's courses
        $courseIds = $student->enrollments()
            ->where('status', 'active')
            ->pluck('course_id')
            ->toArray();
        
        $session = ClassSession::whereIn('course_id', $courseIds)
            ->findOrFail($validated['class_session_id']);
        
        // Check if attendance already exists for this student on this date (regardless of session_id)
        // This prevents duplicate entries when marking from different pages with different session IDs
        $existingAttendance = Attendance::where('student_id', $student->id)
            ->whereDate('date', $validated['date'])
            ->first();
        
        if ($existingAttendance) {
            // Update existing attendance record with new status and correct session ID
            $existingAttendance->update([
                'class_session_id' => $validated['class_session_id'],
                'status' => $validated['status'],
                'time' => now(),
                'remarks' => $validated['remarks'] ?? $existingAttendance->remarks
            ]);
        } else {
            // Create new attendance record
            Attendance::create([
                'student_id' => $student->id,
                'class_session_id' => $validated['class_session_id'],
                'date' => $validated['date'],
                'status' => $validated['status'],
                'time' => now(),
                'remarks' => $validated['remarks'] ?? null
            ]);
        }
        
        if ($request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => 'Attendance marked successfully'
            ]);
        }
        
        return back()->with('success', 'Attendance marked successfully');
    }
}
