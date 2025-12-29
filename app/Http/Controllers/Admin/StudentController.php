<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Models\Course;
use App\Models\ClassSession;
use App\Models\Enrollment;
use App\Models\Teacher;
use App\Models\StudentNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class StudentController extends Controller
{
    public function index(Request $request)
    {
        $query = Student::withTrashed();

        // Search filter
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('email', 'like', "%{$search}%")
                  ->orWhere('phone', 'like', "%{$search}%");
            });
        }

        // Status filter
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        // Country filter
        if ($request->filled('country')) {
            $query->where('country', $request->country);
        }

        // Date range filter
        if ($request->filled('date_from')) {
            $query->whereDate('created_at', '>=', $request->date_from);
        }
        if ($request->filled('date_to')) {
            $query->whereDate('created_at', '<=', $request->date_to);
        }

        // Has credentials filter
        if ($request->filled('has_credentials')) {
            if ($request->has_credentials == 'yes') {
                $query->whereNotNull('password');
            } else {
                $query->whereNull('password');
            }
        }

        $students = $query->latest()->paginate(15)->withQueryString();
        
        $courses = Course::where('status', 'active')->get();
        $classSessions = ClassSession::with(['course', 'teacher'])
            ->where('status', 'scheduled')
            ->get();
        $teachers = \App\Models\Teacher::where('status', 'active')->get();
        
        // Get unique countries for filter
        $countries = Student::whereNotNull('country')
            ->distinct()
            ->pluck('country')
            ->sort()
            ->values();
        
        return view('admin.students.index', compact('students', 'courses', 'classSessions', 'teachers', 'countries'));
    }

    public function create()
    {
        return view('admin.students.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'nullable|email|unique:students,email',
            'phone' => 'nullable|string',
            'country' => 'nullable|string',
            'status' => 'required|in:active,inactive,pending,suspended',
            'generate_credentials' => 'nullable|boolean',
            'password' => 'nullable|string|min:8',
            'start_time' => 'nullable|date_format:H:i',
            'end_time' => 'nullable|date_format:H:i|after:start_time',
            'teacher_id' => 'nullable|exists:teachers,id',
        ]);

        // Generate password if requested
        if ($request->has('generate_credentials') && $request->generate_credentials) {
            $password = Str::random(12);
            $validated['password'] = Hash::make($password);
            $validated['email_verified_at'] = now();
        } elseif ($request->filled('password')) {
            $validated['password'] = Hash::make($request->password);
        }

        $student = Student::create($validated);

        if ($request->ajax()) {
            $response = ['success' => true, 'message' => 'Student created successfully'];
            if ($request->has('generate_credentials') && $request->generate_credentials) {
                $response['credentials'] = [
                    'email' => $student->email,
                    'password' => $password ?? null,
                ];
            }
            return response()->json($response);
        }

        $message = 'Student created successfully';
        if ($request->has('generate_credentials') && $request->generate_credentials) {
            $message .= '. Credentials - Email: ' . $student->email . ', Password: ' . ($password ?? 'N/A');
        }

        return redirect()->route('admin.students.index')->with('success', $message);
    }

    public function show(Student $student)
    {
        $student->load('enrollments.course', 'enrollments.classSession.teacher', 'payments');
        $courses = Course::where('status', 'active')->get();
        $classSessions = ClassSession::with(['course', 'teacher'])
            ->where('status', 'scheduled')
            ->get();
        $teachers = Teacher::where('status', 'active')->get();
        
        return view('admin.students.show', compact('student', 'courses', 'classSessions', 'teachers'));
    }

    public function edit(Student $student)
    {
        return view('admin.students.edit', compact('student'));
    }

    public function update(Request $request, Student $student)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'nullable|email|unique:students,email,' . $student->id,
            'phone' => 'nullable|string',
            'country' => 'nullable|string',
            'status' => 'required|in:active,inactive,pending,suspended',
            'password' => 'nullable|string|min:8',
            'start_time' => 'nullable|date_format:H:i',
            'end_time' => 'nullable|date_format:H:i|after:start_time',
            'teacher_id' => 'nullable|exists:teachers,id',
        ]);

        if ($request->filled('password')) {
            $validated['password'] = Hash::make($request->password);
        } else {
            unset($validated['password']);
        }

        $student->update($validated);

        if ($request->ajax()) {
            return response()->json(['success' => true, 'message' => 'Student updated successfully']);
        }

        return redirect()->route('admin.students.index')->with('success', 'Student updated successfully');
    }

    public function generateCredentials(Student $student, Request $request)
    {
        if (!$student->email) {
            if ($request->ajax()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Student must have an email address to generate credentials'
                ], 422);
            }
            return back()->withErrors(['email' => 'Student must have an email address to generate credentials']);
        }

        $password = Str::random(12);
        $student->update([
            'password' => Hash::make($password),
            'email_verified_at' => now(),
        ]);

        if ($request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => 'Credentials generated successfully',
                'credentials' => [
                    'email' => $student->email,
                    'password' => $password
                ]
            ]);
        }

        return back()->with('success', 'Credentials generated successfully. Email: ' . $student->email . ', Password: ' . $password);
    }

    public function destroy(Student $student, Request $request)
    {
        $student->delete();
        
        if ($request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => 'Student deleted successfully'
            ]);
        }
        
        return redirect()->route('admin.students.index')->with('success', 'Student deleted successfully');
    }

    public function assignCourse(Request $request, Student $student)
    {
        $validated = $request->validate([
            'course_id' => 'required|exists:courses,id',
            'class_session_id' => 'nullable|exists:class_sessions,id',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date|after:start_date',
            'fee' => 'nullable|numeric|min:0',
            'status' => 'required|in:pending,active,completed,cancelled,on_hold',
            'notes' => 'nullable|string',
        ]);

        $validated['student_id'] = $student->id;

        // If class_session_id is provided, get the course from it
        if ($request->filled('class_session_id')) {
            $classSession = ClassSession::find($request->class_session_id);
            if ($classSession) {
                $validated['course_id'] = $classSession->course_id;
            }
        }

        $enrollment = Enrollment::create($validated);
        $course = Course::find($validated['course_id']);
        $classSession = $request->filled('class_session_id') ? ClassSession::with('teacher')->find($request->class_session_id) : null;

        // Create notification for course assignment
        $message = "You have been enrolled in the course: {$course->name}";
        if ($classSession && $classSession->teacher) {
            $message .= ". Your assigned teacher is: {$classSession->teacher->name}";
        }
        
        StudentNotification::createNotification(
            $student->id,
            'course_assigned',
            'New Course Assigned',
            $message,
            'solar:book-bookmark-bold-duotone',
            'success',
            ['enrollment_id' => $enrollment->id, 'course_id' => $course->id, 'course_name' => $course->name]
        );

        // Create separate notification if teacher is assigned
        if ($classSession && $classSession->teacher) {
            StudentNotification::createNotification(
                $student->id,
                'teacher_assigned',
                'Teacher Assigned',
                "Teacher {$classSession->teacher->name} has been assigned to your {$course->name} course",
                'solar:user-id-bold-duotone',
                'info',
                ['enrollment_id' => $enrollment->id, 'teacher_id' => $classSession->teacher->id, 'teacher_name' => $classSession->teacher->name, 'course_name' => $course->name]
            );
        }

        if ($request->ajax()) {
            return response()->json(['success' => true, 'message' => 'Course assigned successfully']);
        }

        return redirect()->route('admin.students.show', $student)->with('success', 'Course assigned successfully');
    }

    public function removeEnrollment(Student $student, Enrollment $enrollment)
    {
        if ($enrollment->student_id !== $student->id) {
            return back()->withErrors(['error' => 'Invalid enrollment']);
        }

        $enrollment->delete();

        return redirect()->route('admin.students.show', $student)->with('success', 'Enrollment removed successfully');
    }
}
