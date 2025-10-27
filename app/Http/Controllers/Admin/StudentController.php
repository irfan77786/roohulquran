<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::withTrashed()->latest()->paginate(15);
        return view('admin.students.index', compact('students'));
    }

    public function create()
    {
        return view('admin.students.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'nullable|email',
            'phone' => 'nullable|string',
            'country' => 'nullable|string',
            'status' => 'required|in:active,inactive,pending,suspended'
        ]);

        Student::create($validated);

        if ($request->ajax()) {
            return response()->json(['success' => true, 'message' => 'Student created successfully']);
        }

        return redirect()->route('admin.students.index')->with('success', 'Student created successfully');
    }

    public function show(Student $student)
    {
        $student->load('enrollments.course', 'payments');
        return view('admin.students.show', compact('student'));
    }

    public function edit(Student $student)
    {
        return view('admin.students.edit', compact('student'));
    }

    public function update(Request $request, Student $student)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'nullable|email',
            'phone' => 'nullable|string',
            'country' => 'nullable|string',
            'status' => 'required|in:active,inactive,pending,suspended'
        ]);

        $student->update($validated);

        if ($request->ajax()) {
            return response()->json(['success' => true, 'message' => 'Student updated successfully']);
        }

        return redirect()->route('admin.students.index')->with('success', 'Student updated successfully');
    }

    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('admin.students.index')->with('success', 'Student deleted successfully');
    }
}
