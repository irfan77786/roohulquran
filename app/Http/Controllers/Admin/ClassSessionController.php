<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ClassSession;
use App\Models\Course;
use App\Models\Teacher;
use App\Models\Enrollment;
use Illuminate\Http\Request;

class ClassSessionController extends Controller
{
    public function index()
    {
        $sessions = ClassSession::with(['course', 'teacher'])->latest()->paginate(15);
        $courses = Course::where('status', 'active')->get();
        $teachers = Teacher::where('status', 'active')->get();

        return view('admin.sessions.index', compact('sessions', 'courses', 'teachers'));
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
}
