<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Enrollment;
use App\Models\Payment;
use App\Models\Attendance;
use App\Models\ClassSession;
use App\Models\Invoice;
use App\Models\Course;
use App\Helpers\CurrencyHelper;
use App\Helpers\TimezoneHelper;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:student');
    }

    public function index()
    {
        $student = Auth::guard('student')->user();
        
        // Get student statistics
        $totalEnrollments = $student->enrollments()->count();
        $activeEnrollments = $student->enrollments()->where('status', 'active')->count();
        $totalPayments = $student->payments()->count();
        $totalPaid = $student->payments()->where('status', 'paid')->sum('amount');
        $totalPending = $student->payments()->where('status', 'pending')->sum('amount');
        $attendanceCount = $student->attendance()->count();
        $attendancePresent = $student->attendance()->where('status', 'present')->count();
        
        // Recent enrollments
        $recentEnrollments = $student->enrollments()
            ->with(['course', 'classSession'])
            ->latest()
            ->take(5)
            ->get();
        
        // Upcoming classes
        $upcomingClasses = $student->enrollments()
            ->whereHas('classSession', function($query) {
                $query->where('status', 'scheduled');
            })
            ->with(['classSession.teacher', 'course'])
            ->get()
            ->map(function($enrollment) {
                return $enrollment->classSession;
            })
            ->sortBy('scheduled_date')
            ->take(5);
        
        // Recent payments
        $recentPayments = $student->payments()
            ->with('enrollment.course')
            ->latest()
            ->take(5)
            ->get();
        
        // Recent attendance
        $recentAttendance = $student->attendance()
            ->with('classSession.course')
            ->latest()
            ->take(10)
            ->get();

        // Get currency and timezone based on student's country
        $currency = CurrencyHelper::getCurrencyFromCountry($student->country);
        $currencySymbol = CurrencyHelper::getCurrencySymbol($currency);
        $timezone = TimezoneHelper::getTimezoneFromCountry($student->country);
        $currentTime = Carbon::now($timezone);

        return view('student.dashboard', compact(
            'student',
            'totalEnrollments',
            'activeEnrollments',
            'totalPayments',
            'totalPaid',
            'totalPending',
            'attendanceCount',
            'attendancePresent',
            'recentEnrollments',
            'upcomingClasses',
            'recentPayments',
            'recentAttendance',
            'currency',
            'currencySymbol',
            'timezone',
            'currentTime'
        ));
    }

    public function enrollments(Request $request)
    {
        $student = Auth::guard('student')->user();
        $query = $student->enrollments()
            ->with(['course', 'classSession.teacher']);

        // Status filter
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        // Course filter
        if ($request->filled('course_id')) {
            $query->where('course_id', $request->course_id);
        }

        // Date range filter
        if ($request->filled('date_from')) {
            $query->whereDate('start_date', '>=', $request->date_from);
        }
        if ($request->filled('date_to')) {
            $query->whereDate('start_date', '<=', $request->date_to);
        }

        // Search filter
        if ($request->filled('search')) {
            $search = $request->search;
            $query->whereHas('course', function($q) use ($search) {
                $q->where('name', 'like', "%{$search}%");
            });
        }

        $enrollments = $query->latest()->paginate(15)->withQueryString();
        
        // Get courses for filter
        $courses = \App\Models\Course::whereIn('id', $student->enrollments()->pluck('course_id'))->get();

        // Get currency and timezone
        $currency = CurrencyHelper::getCurrencyFromCountry($student->country);
        $currencySymbol = CurrencyHelper::getCurrencySymbol($currency);
        $timezone = TimezoneHelper::getTimezoneFromCountry($student->country);

        return view('student.enrollments', compact('enrollments', 'courses', 'student', 'currency', 'currencySymbol', 'timezone'));
    }

    public function showEnrollment(Enrollment $enrollment)
    {
        $student = Auth::guard('student')->user();
        
        // Ensure student can only view their own enrollments
        if ($enrollment->student_id !== $student->id) {
            abort(403, 'Unauthorized access to enrollment');
        }

        $enrollment->load([
            'course',
            'classSession.teacher',
            'payments',
            'student'
        ]);

        // Get attendance for this enrollment
        $attendance = $student->attendance()
            ->whereHas('classSession', function($query) use ($enrollment) {
                $query->where('course_id', $enrollment->course_id);
            })
            ->with('classSession')
            ->latest()
            ->get();

        // Get related invoices
        $invoices = $student->invoices()
            ->where('enrollment_id', $enrollment->id)
            ->with('payments')
            ->latest()
            ->get();

        $currency = CurrencyHelper::getCurrencyFromCountry($student->country);
        $currencySymbol = CurrencyHelper::getCurrencySymbol($currency);
        $timezone = TimezoneHelper::getTimezoneFromCountry($student->country);

        return view('student.enrollment-details', compact('enrollment', 'attendance', 'invoices', 'currency', 'currencySymbol', 'timezone'));
    }

    public function payments(Request $request)
    {
        $student = Auth::guard('student')->user();
        
        // Build payments query with filters
        $paymentsQuery = $student->payments()->with('enrollment.course');

        // Filter by status
        if ($request->filled('status')) {
            $paymentsQuery->where('status', $request->status);
        }

        // Filter by date range
        if ($request->filled('date_from')) {
            $paymentsQuery->whereDate('paid_date', '>=', $request->date_from)
                          ->orWhere(function($q) use ($request) {
                              $q->whereNull('paid_date')
                                ->whereDate('due_date', '>=', $request->date_from);
                          });
        }
        if ($request->filled('date_to')) {
            $paymentsQuery->where(function($q) use ($request) {
                $q->whereDate('paid_date', '<=', $request->date_to)
                  ->orWhere(function($q2) use ($request) {
                      $q2->whereNull('paid_date')
                         ->whereDate('due_date', '<=', $request->date_to);
                  });
            });
        }

        // Search functionality
        if ($request->filled('search')) {
            $search = $request->search;
            $paymentsQuery->where(function($q) use ($search) {
                $q->where('invoice_number', 'like', "%{$search}%")
                  ->orWhere('amount', 'like', "%{$search}%")
                  ->orWhereHas('enrollment.course', function($q) use ($search) {
                      $q->where('name', 'like', "%{$search}%");
                  });
            });
        }

        $payments = $paymentsQuery->latest()->paginate(15)->withQueryString();

        // Get invoices for this student (with filters)
        $invoicesQuery = $student->invoices()->with(['enrollment.course', 'payments']);

        // Filter invoices by status
        if ($request->filled('invoice_status')) {
            $invoicesQuery->where('status', $request->invoice_status);
        }

        // Search invoices
        if ($request->filled('search')) {
            $search = $request->search;
            $invoicesQuery->where(function($q) use ($search) {
                $q->where('invoice_number', 'like', "%{$search}%")
                  ->orWhere('title', 'like', "%{$search}%");
            });
        }

        $invoices = $invoicesQuery->latest()->get();

        $summary = [
            'total' => $student->payments()->sum('amount'),
            'paid' => $student->payments()->where('status', 'paid')->sum('amount'),
            'pending' => $student->payments()->where('status', 'pending')->sum('amount'),
            'overdue' => $student->payments()
                ->where('status', 'pending')
                ->where('due_date', '<', now())
                ->sum('amount'),
        ];

        $currency = CurrencyHelper::getCurrencyFromCountry($student->country);
        $currencySymbol = CurrencyHelper::getCurrencySymbol($currency);

        $timezone = TimezoneHelper::getTimezoneFromCountry($student->country);
        
        return view('student.payments', compact('payments', 'invoices', 'summary', 'currency', 'currencySymbol', 'timezone', 'student'));
    }

    public function downloadInvoice(Invoice $invoice)
    {
        $student = Auth::guard('student')->user();
        
        // Ensure student can only download their own invoices
        if ($invoice->student_id !== $student->id) {
            abort(403, 'Unauthorized access to invoice');
        }

        $invoice->load(['student', 'enrollment.course', 'enrollment.classSession.teacher', 'payments']);
        
        // Generate PDF
        $pdf = Pdf::loadView('admin.invoices.pdf', compact('invoice'));
        $pdf->setPaper('A4', 'portrait');
        
        // Download the PDF
        return $pdf->download('Invoice-' . $invoice->invoice_number . '.pdf');
    }

    public function attendance(Request $request)
    {
        $student = Auth::guard('student')->user();
        $query = $student->attendance()
            ->with('classSession.course');

        // Status filter
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        // Date range filter
        if ($request->filled('date_from')) {
            $query->whereDate('date', '>=', $request->date_from);
        }
        if ($request->filled('date_to')) {
            $query->whereDate('date', '<=', $request->date_to);
        }

        // Course filter
        if ($request->filled('course_id')) {
            $query->whereHas('classSession', function($q) use ($request) {
                $q->where('course_id', $request->course_id);
            });
        }

        $attendance = $query->latest()->paginate(20)->withQueryString();

        // Calculate stats with same filters
        $statsQuery = $student->attendance();
        if ($request->filled('date_from')) {
            $statsQuery->whereDate('date', '>=', $request->date_from);
        }
        if ($request->filled('date_to')) {
            $statsQuery->whereDate('date', '<=', $request->date_to);
        }
        if ($request->filled('course_id')) {
            $statsQuery->whereHas('classSession', function($q) use ($request) {
                $q->where('course_id', $request->course_id);
            });
        }

        $stats = [
            'total' => $statsQuery->count(),
            'present' => (clone $statsQuery)->where('status', 'present')->count(),
            'absent' => (clone $statsQuery)->where('status', 'absent')->count(),
            'late' => (clone $statsQuery)->where('status', 'late')->count(),
        ];

        // Get courses for filter
        $courses = \App\Models\Course::whereIn('id', $student->enrollments()->pluck('course_id'))->get();

        // Get currency and timezone
        $currency = CurrencyHelper::getCurrencyFromCountry($student->country);
        $currencySymbol = CurrencyHelper::getCurrencySymbol($currency);
        $timezone = TimezoneHelper::getTimezoneFromCountry($student->country);

        return view('student.attendance', compact('attendance', 'stats', 'courses', 'student', 'currency', 'currencySymbol', 'timezone'));
    }

    public function profile()
    {
        $student = Auth::guard('student')->user();
        return view('student.profile', compact('student'));
    }

    public function updateProfile(Request $request)
    {
        $student = Auth::guard('student')->user();

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'nullable|string',
            'whatsapp' => 'nullable|string',
            'city' => 'nullable|string',
            'gender' => 'nullable|in:male,female',
            'date_of_birth' => 'nullable|date',
            'guardian_name' => 'nullable|string',
            'guardian_phone' => 'nullable|string',
        ]);

        $student->update($validated);

        return redirect()->route('student.profile')->with('success', 'Profile updated successfully');
    }

    public function changePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'password' => 'required|min:8|confirmed',
        ]);

        $student = Auth::guard('student')->user();

        if (!Hash::check($request->current_password, $student->password)) {
            return back()->withErrors(['current_password' => 'Current password is incorrect']);
        }

        $student->update([
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('student.profile')->with('success', 'Password changed successfully');
    }

    public function sessions(Request $request)
    {
        $student = Auth::guard('student')->user();
        
        // Get course IDs from student's active enrollments
        $courseIds = $student->enrollments()
            ->where('status', 'active')
            ->pluck('course_id')
            ->toArray();
        
        // Build query for sessions
        $query = ClassSession::whereIn('course_id', $courseIds)
            ->with(['course', 'teacher']);
        
        // Filter by course
        if ($request->filled('course_id')) {
            $query->where('course_id', $request->course_id);
        }
        
        // Filter by status
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }
        
        // Filter by date range
        if ($request->filled('date_from')) {
            $query->whereDate('start_date', '>=', $request->date_from);
        }
        if ($request->filled('date_to')) {
            $query->whereDate('start_date', '<=', $request->date_to);
        }
        
        // Search filter
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('description', 'like', "%{$search}%")
                  ->orWhereHas('course', function($courseQuery) use ($search) {
                      $courseQuery->where('name', 'like', "%{$search}%");
                  });
            });
        }
        
        $sessions = $query->orderBy('start_date', 'desc')
            ->orderBy('start_time', 'asc')
            ->paginate(20)
            ->withQueryString();
        
        // Get today's session
        $today = Carbon::today();
        $todaySession = ClassSession::whereIn('course_id', $courseIds)
            ->whereDate('start_date', $today)
            ->with(['course', 'teacher'])
            ->orderBy('start_time', 'asc')
            ->first();
        
        // Get courses for filter
        $courses = Course::whereIn('id', $courseIds)->get();
        
        // Get currency and timezone
        $currency = CurrencyHelper::getCurrencyFromCountry($student->country);
        $currencySymbol = CurrencyHelper::getCurrencySymbol($currency);
        $timezone = TimezoneHelper::getTimezoneFromCountry($student->country);
        $currentTime = Carbon::now($timezone);
        
        return view('student.sessions', compact('sessions', 'courses', 'student', 'currency', 'currencySymbol', 'timezone', 'todaySession', 'currentTime'));
    }
}
