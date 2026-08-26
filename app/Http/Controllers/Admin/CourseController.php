<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Jobs\GenerateBulkMonthlySessionsJob;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CourseController extends Controller
{
    public function index(Request $request)
    {
        $query = Course::query();

        // Search filter
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('description', 'like', "%{$search}%")
                  ->orWhere('level', 'like', "%{$search}%");
            });
        }

        // Status filter
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        // Level filter
        if ($request->filled('level')) {
            $query->where('level', $request->level);
        }

        // Date range filter
        if ($request->filled('date_from')) {
            $query->whereDate('created_at', '>=', $request->date_from);
        }
        if ($request->filled('date_to')) {
            $query->whereDate('created_at', '<=', $request->date_to);
        }

        // Price range filter
        if ($request->filled('price_min')) {
            $query->where('price', '>=', $request->price_min);
        }
        if ($request->filled('price_max')) {
            $query->where('price', '<=', $request->price_max);
        }

        $courses = $query->latest()->paginate(15)->withQueryString();
        
        // Get unique levels for filter
        $levels = Course::whereNotNull('level')
            ->distinct()
            ->pluck('level')
            ->sort()
            ->values();
        
        // Get all active courses for bulk generation modal
        $allCourses = Course::where('status', 'active')->orderBy('name')->get();
        
        // Get teachers for bulk generation modal
        $teachers = \App\Models\Teacher::where('status', 'active')->orderBy('name')->get();
        
        return view('admin.courses.index', compact('courses', 'levels', 'allCourses', 'teachers'));
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

    public function generateBulkSessions(Request $request)
    {
        $validated = $request->validate([
            'month' => 'required|integer|min:1|max:12',
            'year' => 'required|integer|min:' . date('Y') . '|max:' . (date('Y') + 1),
            'days_of_week' => 'required|array|min:1',
            'days_of_week.*' => 'required|in:Monday,Tuesday,Wednesday,Thursday,Friday,Saturday,Sunday',
            'start_time' => 'nullable|date_format:H:i',
            'end_time' => 'nullable|date_format:H:i|after:start_time',
            'teacher_id' => 'nullable|exists:teachers,id',
            'meeting_link' => 'nullable|string|max:255',
            'course_ids' => 'nullable|array',
            'course_ids.*' => 'exists:courses,id',
        ]);

        // Dispatch the job
        GenerateBulkMonthlySessionsJob::dispatch(
            $validated['month'],
            $validated['year'],
            $validated['days_of_week'],
            $validated['start_time'],
            $validated['end_time'],
            $validated['teacher_id'] ?? null,
            $validated['meeting_link'] ?? null,
            $validated['course_ids'] ?? null
        );

        if ($request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => 'Bulk session generation job has been queued. Sessions will be generated in the background.'
            ]);
        }

        return redirect()->route('admin.courses.index')
            ->with('success', 'Bulk session generation job has been queued. Sessions will be generated in the background.');
    }
}
