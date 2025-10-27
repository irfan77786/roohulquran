<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::latest()->paginate(15);
        return view('admin.courses.index', compact('courses'));
    }

    public function create()
    {
        return view('admin.courses.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'level' => 'required|in:beginner,intermediate,advanced,expert',
            'duration_weeks' => 'nullable|integer',
            'price' => 'nullable|numeric',
            'status' => 'required|in:active,inactive,draft'
        ]);

        $validated['slug'] = Str::slug($request->name);
        Course::create($validated);

        if ($request->ajax()) {
            return response()->json(['success' => true, 'message' => 'Course created successfully']);
        }

        return redirect()->route('admin.courses.index')->with('success', 'Course created successfully');
    }

    public function show(Course $course)
    {
        $course->load('classSessions.teacher');
        return view('admin.courses.show', compact('course'));
    }

    public function edit(Course $course)
    {
        return view('admin.courses.edit', compact('course'));
    }

    public function update(Request $request, Course $course)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'level' => 'required|in:beginner,intermediate,advanced,expert',
            'duration_weeks' => 'nullable|integer',
            'price' => 'nullable|numeric',
            'status' => 'required|in:active,inactive,draft'
        ]);

        $validated['slug'] = Str::slug($request->name);
        $course->update($validated);

        if ($request->ajax()) {
            return response()->json(['success' => true, 'message' => 'Course updated successfully']);
        }

        return redirect()->route('admin.courses.index')->with('success', 'Course updated successfully');
    }

    public function destroy(Course $course)
    {
        $course->delete();
        return redirect()->route('admin.courses.index')->with('success', 'Course deleted successfully');
    }
}
