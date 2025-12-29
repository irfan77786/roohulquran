@extends('student.main')

@section('title', 'Dashboard')

@section('content')
<div class="container-fluid">
    <!-- Page Header -->
    <div class="page-header">
        <div class="d-flex justify-content-between align-items-center">
            <div>
                <h2>Welcome back, {{ $student->name }}! 👋</h2>
                <p>Here's what's happening with your studies today</p>
                @if($student->country)
                    <div class="d-flex align-items-center gap-3 mt-2">
                        <small class="text-muted">
                            <i class="ti ti-map-pin me-1"></i>{{ $student->country }}
                        </small>
                        <small class="text-muted">
                            <i class="ti ti-clock me-1"></i>{{ $currentTime->format('h:i A') }} ({{ $timezone }})
                        </small>
                        <small class="text-muted">
                            <i class="ti ti-currency-dollar me-1"></i>{{ $currency }} ({{ $currencySymbol }})
                        </small>
                    </div>
                @endif
            </div>
            <div>
                <a href="{{ route('student.profile') }}" class="btn btn-outline-primary">
                    <i class="ti ti-user me-2"></i>View Profile
                </a>
            </div>
        </div>
    </div>

    <!-- Statistics Cards -->
    <div class="row mb-4">
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card stat-card primary">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <div class="stat-label">Total Enrollments</div>
                            <div class="stat-value">{{ $totalEnrollments }}</div>
                            <div class="stat-sublabel">
                                <i class="ti ti-check me-1"></i>{{ $activeEnrollments }} Active Courses
                            </div>
                        </div>
                        <div class="stat-icon">
                            <iconify-icon icon="solar:book-bookmark-bold-duotone"></iconify-icon>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card stat-card success">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <div class="stat-label">Total Paid</div>
                            <div class="stat-value">{{ $currencySymbol }}{{ number_format($totalPaid, 0) }}</div>
                            <div class="stat-sublabel" style="font-size: 11px; color: #666;">
                                <i class="ti ti-currency me-1"></i>{{ $currency ?? 'USD' }}
                            </div>
                            <div class="stat-sublabel">
                                <i class="ti ti-wallet me-1"></i>{{ $totalPayments }} Transactions
                            </div>
                        </div>
                        <div class="stat-icon">
                            <iconify-icon icon="solar:wallet-money-bold-duotone"></iconify-icon>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card stat-card warning">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <div class="stat-label">Attendance Rate</div>
                            <div class="stat-value">
                                @if($attendanceCount > 0)
                                    {{ round(($attendancePresent / $attendanceCount) * 100) }}%
                                @else
                                    N/A
                                @endif
                            </div>
                            <div class="stat-sublabel">
                                <i class="ti ti-clipboard-check me-1"></i>{{ $attendancePresent }}/{{ $attendanceCount }} Classes
                            </div>
                        </div>
                        <div class="stat-icon">
                            <iconify-icon icon="solar:clipboard-check-bold-duotone"></iconify-icon>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card stat-card info">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <div class="stat-label">Pending Payment</div>
                            <div class="stat-value">{{ $currencySymbol }}{{ number_format($totalPending, 0) }}</div>
                            <div class="stat-sublabel">
                                <i class="ti ti-alert-circle me-1"></i>Outstanding Balance
                            </div>
                        </div>
                        <div class="stat-icon">
                            <iconify-icon icon="solar:dollar-minimalistic-bold-duotone"></iconify-icon>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Quick Actions -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5><i class="ti ti-bolt me-2"></i>Quick Actions</h5>
                </div>
                <div class="card-body">
                    <div class="row g-3">
                        <div class="col-lg-3 col-md-6">
                            <a href="{{ route('student.enrollments') }}" class="quick-action-card">
                                <iconify-icon icon="solar:book-bookmark-bold-duotone"></iconify-icon>
                                <h6>My Courses</h6>
                                <small class="text-muted">View all enrollments</small>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <a href="{{ route('student.payments') }}" class="quick-action-card">
                                <iconify-icon icon="solar:wallet-money-bold-duotone"></iconify-icon>
                                <h6>Payments</h6>
                                <small class="text-muted">View payment history</small>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <a href="{{ route('student.attendance') }}" class="quick-action-card">
                                <iconify-icon icon="solar:clipboard-check-bold-duotone"></iconify-icon>
                                <h6>Attendance</h6>
                                <small class="text-muted">Check your records</small>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <a href="{{ route('student.profile') }}" class="quick-action-card">
                                <iconify-icon icon="solar:user-id-bold-duotone"></iconify-icon>
                                <h6>Profile</h6>
                                <small class="text-muted">Update information</small>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- Recent Enrollments -->
        <div class="col-lg-6 mb-4">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5><i class="ti ti-book me-2"></i>My Courses</h5>
                    <a href="{{ route('student.enrollments') }}" class="btn btn-sm btn-outline-primary">View All</a>
                </div>
                <div class="card-body">
                    @if($recentEnrollments->count() > 0)
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Course Name</th>
                                        <th>Status</th>
                                        <th>Start Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($recentEnrollments->take(5) as $enrollment)
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="avatar-xs bg-primary bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 40px; height: 40px;">
                                                    <iconify-icon icon="solar:book-bold-duotone" class="text-primary"></iconify-icon>
                                                </div>
                                                <div>
                                                    <strong class="d-block">{{ $enrollment->course->name ?? 'N/A' }}</strong>
                                                    @if($enrollment->course)
                                                        <small class="text-muted">{{ $enrollment->course->level }}</small>
                                                    @endif
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="badge bg-{{ $enrollment->status === 'active' ? 'success' : ($enrollment->status === 'completed' ? 'info' : 'secondary') }}">
                                                {{ ucfirst($enrollment->status) }}
                                            </span>
                                        </td>
                                        <td>
                                            <small class="text-muted">
                                                @if($enrollment->start_date)
                                                    {{ \App\Helpers\TimezoneHelper::formatForStudent($enrollment->start_date, $student->country, 'M d, Y') }}
                                                @else
                                                    N/A
                                                @endif
                                            </small>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <div class="empty-state">
                            <iconify-icon icon="solar:book-bookmark-bold-duotone"></iconify-icon>
                            <h5>No Enrollments Yet</h5>
                            <p>You haven't enrolled in any courses yet</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>

        <!-- Recent Payments -->
        <div class="col-lg-6 mb-4">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5><i class="ti ti-wallet me-2"></i>Recent Payments</h5>
                    <a href="{{ route('student.payments') }}" class="btn btn-sm btn-outline-primary">View All</a>
                </div>
                <div class="card-body">
                    @if($recentPayments->count() > 0)
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Amount</th>
                                        <th>Status</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($recentPayments->take(5) as $payment)
                                    <tr>
                                        <td>
                                            <strong class="text-success">{{ $currencySymbol }}{{ number_format($payment->amount, 2) }}</strong>
                                        </td>
                                        <td>
                                            <span class="badge bg-{{ $payment->status === 'paid' ? 'success' : ($payment->status === 'pending' ? 'warning' : 'danger') }}">
                                                {{ ucfirst($payment->status) }}
                                            </span>
                                        </td>
                                        <td>
                                            <small class="text-muted">
                                                @if($payment->paid_date)
                                                    {{ \App\Helpers\TimezoneHelper::formatForStudent($payment->paid_date, $student->country, 'M d, Y') }}
                                                @elseif($payment->due_date)
                                                    {{ \App\Helpers\TimezoneHelper::formatForStudent($payment->due_date, $student->country, 'M d, Y') }}
                                                @else
                                                    N/A
                                                @endif
                                            </small>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <div class="empty-state">
                            <iconify-icon icon="solar:wallet-money-bold-duotone"></iconify-icon>
                            <h5>No Payments Yet</h5>
                            <p>Your payment history will appear here</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <!-- Attendance Overview -->
    @if($recentAttendance->count() > 0)
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5><i class="ti ti-clipboard-check me-2"></i>Recent Attendance</h5>
                    <a href="{{ route('student.attendance') }}" class="btn btn-sm btn-outline-primary">View All</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Course</th>
                                    <th>Status</th>
                                    <th>Remarks</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($recentAttendance->take(10) as $attendance)
                                <tr>
                                    <td>
                                        <div>
                                            <strong>{{ \App\Helpers\TimezoneHelper::formatForStudent($attendance->date, $student->country, 'M d, Y') }}</strong>
                                            @if($attendance->time)
                                                <br><small class="text-muted">{{ \App\Helpers\TimezoneHelper::formatForStudent($attendance->time, $student->country, 'h:i A') }}</small>
                                            @endif
                                        </div>
                                    </td>
                                    <td>{{ $attendance->classSession->course->name ?? 'N/A' }}</td>
                                    <td>
                                        <span class="badge bg-{{ $attendance->status === 'present' ? 'success' : ($attendance->status === 'late' ? 'warning' : 'danger') }}">
                                            <i class="ti ti-{{ $attendance->status === 'present' ? 'check' : ($attendance->status === 'late' ? 'clock' : 'x') }} me-1"></i>
                                            {{ ucfirst($attendance->status) }}
                                        </span>
                                    </td>
                                    <td>
                                        <small class="text-muted">{{ $attendance->remarks ?? 'No remarks' }}</small>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>
@endsection
