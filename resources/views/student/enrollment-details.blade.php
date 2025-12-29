@extends('student.main')

@section('title', 'Course Details')

@section('content')
<div class="container-fluid">
    <!-- Page Header -->
    <div class="page-header">
        <div class="d-flex justify-content-between align-items-center">
            <div>
                <h2>Course Details</h2>
                <p>Complete information about your enrollment</p>
            </div>
            <a href="{{ route('student.enrollments') }}" class="btn btn-outline-secondary">
                <i class="ti ti-arrow-left me-2"></i>Back to Enrollments
            </a>
        </div>
    </div>

    <div class="row">
        <!-- Course Information -->
        <div class="col-lg-8">
            <div class="card mb-4">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0"><i class="ti ti-book me-2"></i>Course Information</h5>
                </div>
                <div class="card-body">
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="text-muted small">Course Name</label>
                                <h4 class="mb-0">{{ $enrollment->course->name ?? 'N/A' }}</h4>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="text-muted small">Level</label>
                                <p class="mb-0">
                                    <span class="badge bg-info">{{ $enrollment->course->level ?? 'N/A' }}</span>
                                </p>
                            </div>
                        </div>
                    </div>

                    @if($enrollment->course && $enrollment->course->description)
                    <div class="mb-4">
                        <label class="text-muted small">Description</label>
                        <p class="mb-0">{{ $enrollment->course->description }}</p>
                    </div>
                    @endif

                    @if($enrollment->course && $enrollment->course->syllabus)
                    <div class="mb-4">
                        <label class="text-muted small">Syllabus</label>
                        <div class="border rounded p-3 bg-light">
                            {!! nl2br(e($enrollment->course->syllabus)) !!}
                        </div>
                    </div>
                    @endif

                    @if($enrollment->course && $enrollment->course->duration_weeks)
                    <div class="mb-3">
                        <label class="text-muted small">Duration</label>
                        <p class="mb-0">
                            <i class="ti ti-calendar me-2"></i>{{ $enrollment->course->duration_weeks }} weeks
                        </p>
                    </div>
                    @endif
                </div>
            </div>

            <!-- Enrollment Details -->
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="mb-0"><i class="ti ti-info-circle me-2"></i>Enrollment Details</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="text-muted small">Start Date</label>
                            <p class="mb-0">
                                <i class="ti ti-calendar-event me-2"></i>
                                {{ $enrollment->start_date ? $enrollment->start_date->format('F d, Y') : 'N/A' }}
                            </p>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="text-muted small">End Date</label>
                            <p class="mb-0">
                                <i class="ti ti-calendar-x me-2"></i>
                                @if($enrollment->end_date)
                                    {{ \App\Helpers\TimezoneHelper::formatForStudent($enrollment->end_date, $enrollment->student->country ?? null, 'F d, Y') }}
                                @else
                                    N/A
                                @endif
                            </p>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="text-muted small">Status</label>
                            <p class="mb-0">
                                <span class="badge bg-{{ $enrollment->status === 'active' ? 'success' : ($enrollment->status === 'completed' ? 'info' : 'secondary') }} fs-6">
                                    <i class="ti ti-{{ $enrollment->status === 'active' ? 'check-circle' : ($enrollment->status === 'completed' ? 'circle-check' : 'clock') }} me-1"></i>
                                    {{ ucfirst($enrollment->status) }}
                                </span>
                            </p>
                        </div>
                        @if($enrollment->referral_source)
                        <div class="col-md-6 mb-3">
                            <label class="text-muted small">Referral Source</label>
                            <p class="mb-0">{{ $enrollment->referral_source }}</p>
                        </div>
                        @endif
                    </div>

                    @if($enrollment->notes)
                    <div class="mt-3">
                        <label class="text-muted small">Notes</label>
                        <div class="border rounded p-3 bg-light">
                            {{ $enrollment->notes }}
                        </div>
                    </div>
                    @endif
                </div>
            </div>

            <!-- Attendance Record -->
            @if($attendance->count() > 0)
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="mb-0"><i class="ti ti-checklist me-2"></i>Attendance Record</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Remarks</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($attendance as $record)
                                <tr>
                                    <td>
                                        @if($record->date)
                                            {{ \App\Helpers\TimezoneHelper::formatForStudent($record->date, $enrollment->student->country ?? null, 'M d, Y') }}
                                        @else
                                            N/A
                                        @endif
                                    </td>
                                    <td>
                                        <span class="badge bg-{{ $record->status === 'present' ? 'success' : ($record->status === 'late' ? 'warning' : 'danger') }}">
                                            {{ ucfirst($record->status ?? 'N/A') }}
                                        </span>
                                    </td>
                                    <td>{{ $record->remarks ?? '-' }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            @endif
        </div>

        <!-- Sidebar -->
        <div class="col-lg-4">
            <!-- Teacher Information -->
            <div class="card mb-4">
                <div class="card-header bg-success text-white">
                    <h5 class="mb-0"><i class="ti ti-user me-2"></i>Teacher Information</h5>
                </div>
                <div class="card-body text-center">
                    @if($enrollment->classSession && $enrollment->classSession->teacher)
                        <div class="avatar-lg bg-success bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center mx-auto mb-3" style="width: 80px; height: 80px;">
                            <iconify-icon icon="solar:user-id-bold-duotone" class="text-success" style="font-size: 2.5rem;"></iconify-icon>
                        </div>
                        <h5 class="mb-1">{{ $enrollment->classSession->teacher->name }}</h5>
                        @if($enrollment->classSession->teacher->email)
                            <p class="text-muted mb-2">
                                <i class="ti ti-mail me-1"></i>{{ $enrollment->classSession->teacher->email }}
                            </p>
                        @endif
                        @if($enrollment->classSession->teacher->phone)
                            <p class="text-muted mb-0">
                                <i class="ti ti-phone me-1"></i>{{ $enrollment->classSession->teacher->phone }}
                            </p>
                        @endif
                    @else
                        <p class="text-muted mb-0">No teacher assigned</p>
                    @endif
                </div>
            </div>

            <!-- Class Session Details -->
            @if($enrollment->classSession)
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="mb-0"><i class="ti ti-clock me-2"></i>Class Schedule</h5>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label class="text-muted small">Session Time</label>
                        <p class="mb-0">
                            @if($enrollment->classSession->start_time && $enrollment->classSession->end_time)
                                @if($enrollment->classSession && $enrollment->classSession->start_time && $enrollment->classSession->end_time)
                                    {{ \App\Helpers\TimezoneHelper::formatForStudent(\Carbon\Carbon::parse($enrollment->classSession->start_time), $enrollment->student->country ?? null, 'h:i A') }} - 
                                    {{ \App\Helpers\TimezoneHelper::formatForStudent(\Carbon\Carbon::parse($enrollment->classSession->end_time), $enrollment->student->country ?? null, 'h:i A') }}
                                @else
                                    N/A
                                @endif
                            @else
                                N/A
                            @endif
                        </p>
                    </div>
                    @if($enrollment->classSession->day_of_week)
                    <div class="mb-3">
                        <label class="text-muted small">Day of Week</label>
                        <p class="mb-0">{{ $enrollment->classSession->day_of_week }}</p>
                    </div>
                    @endif
                    @if($enrollment->classSession->status)
                    <div>
                        <label class="text-muted small">Session Status</label>
                        <p class="mb-0">
                            <span class="badge bg-{{ $enrollment->classSession->status === 'active' ? 'success' : 'secondary' }}">
                                {{ ucfirst($enrollment->classSession->status) }}
                            </span>
                        </p>
                    </div>
                    @endif
                </div>
            </div>
            @endif

            <!-- Related Invoices -->
            @if($invoices->count() > 0)
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="mb-0"><i class="ti ti-file-invoice me-2"></i>Related Invoices</h5>
                </div>
                <div class="card-body">
                    @foreach($invoices as $invoice)
                    <div class="border-bottom pb-3 mb-3">
                        <div class="d-flex justify-content-between align-items-start mb-2">
                            <div>
                                <strong>{{ $invoice->invoice_number }}</strong>
                                <br>
                                <small class="text-muted">{{ $invoice->title }}</small>
                            </div>
                            <span class="badge bg-{{ $invoice->status === 'paid' ? 'success' : ($invoice->status === 'overdue' ? 'danger' : 'warning') }}">
                                {{ ucfirst($invoice->status) }}
                            </span>
                        </div>
                        <div class="d-flex justify-content-between">
                            <span class="text-muted small">Total: {{ $currencySymbol }}{{ number_format($invoice->total_amount, 2) }}</span>
                            <a href="{{ route('student.invoice.download', $invoice->id) }}" class="btn btn-sm btn-outline-primary">
                                <i class="ti ti-download"></i> Download
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection

