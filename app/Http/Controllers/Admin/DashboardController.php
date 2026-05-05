<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TrialClass;
use App\Models\Blog;
use App\Models\User;
use App\Models\Admin;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {

        // Get statistics
        $stats = [
            'total_trial_classes' => TrialClass::count(),
            'recent_trial_classes' => TrialClass::where('created_at', '>=', Carbon::now()->subDays(7))->count(),
            'today_trial_classes' => TrialClass::whereDate('created_at', Carbon::today())->count(),
            'total_blogs' => Blog::count(),
            'published_blogs' => Blog::where('status', true)->count(),
            'draft_blogs' => Blog::where('status', false)->count(),
            'total_users' => User::count(),
            'total_students' => Student::count(),
            'active_students' => Student::where('status', 'active')->count(),
            'total_teachers' => Teacher::count(),
            'active_teachers' => Teacher::where('status', 'active')->count(),
            'total_courses' => Course::count(),
            'active_courses' => Course::where('status', 'active')->count(),
        ];

        // Get recent trial classes
        $recent_classes = TrialClass::latest()->take(5)->get();

        // Get recent blogs
        $recent_blogs = Blog::latest()->take(5)->get();

        // Get trial classes by country
        $trial_by_country = TrialClass::select('country', DB::raw('count(*) as total'))
            ->whereNotNull('country')
            ->groupBy('country')
            ->orderByDesc('total')
            ->take(10)
            ->get();

        // Get trial classes over time (last 30 days)
        $trial_over_time = [];
        for ($i = 29; $i >= 0; $i--) {
            $date = Carbon::now()->subDays($i)->format('Y-m-d');
            $trial_over_time[$date] = TrialClass::whereDate('created_at', $date)->count();
        }

        return view('admin.dashbaord', compact(
            'stats',
            'recent_classes',
            'recent_blogs',
            'trial_by_country',
            'trial_over_time'
        ));
    }

    public function trialClasses()
    {
        $classes = TrialClass::query()
            ->orderByDesc('created_at')
            ->orderByDesc('id')
            ->get();

        return view('admin.trial-classes', compact('classes'));
    }

    public function destroyTrialClass(Request $request, TrialClass $trialClass)
    {
        $trialClass->delete();

        if ($request->wantsJson() || $request->ajax()) {
            return response()->json(['message' => 'Registration deleted.']);
        }

        return redirect()->route('admin.trial.classes')->with('success', 'Registration deleted.');
    }

    public function bulkDestroyTrialClasses(Request $request)
    {
        $validated = $request->validate([
            'ids' => 'required|array|min:1',
            'ids.*' => 'integer|exists:trial_classes,id',
        ]);

        TrialClass::whereIn('id', $validated['ids'])->delete();
        $count = count($validated['ids']);

        if ($request->wantsJson() || $request->ajax()) {
            return response()->json([
                'message' => $count === 1
                    ? '1 registration deleted.'
                    : $count . ' registrations deleted.',
            ]);
        }

        return redirect()->route('admin.trial.classes')->with('success', $count . ' registration(s) deleted.');
    }

    public function exportTrialClasses()
    {
        $classes = TrialClass::query()
            ->orderByDesc('created_at')
            ->orderByDesc('id')
            ->get();

        $filename = 'trial-classes-' . date('Y-m-d-H-i-s') . '.csv';

        $headers = [
            'Content-type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename="' . $filename . '"',
            'Pragma' => 'no-cache',
            'Cache-Control' => 'must-revalidate, post-check=0, pre-check=0',
            'Expires' => '0'
        ];

        $callback = function () use ($classes) {
            $file = fopen('php://output', 'w');

            // Add CSV headers
            fputcsv($file, ['ID', 'Name', 'Email', 'Phone', 'Country', 'Message', 'Course Enroll', 'Date']);

            // Add data rows
            foreach ($classes as $class) {
                fputcsv($file, [
                    $class->id,
                    $class->name,
                    $class->email ?? '',
                    $class->phone ?? '',
                    $class->country ?? '',
                    $class->message ?? '',
                    $class->course_enroll ?? '',
                    $class->created_at->format('Y-m-d H:i:s')
                ]);
            }

            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }
}
