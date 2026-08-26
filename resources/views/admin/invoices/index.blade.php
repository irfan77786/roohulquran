@extends('admin.main')

@section('content')
<div class="container-fluid">
    <div class="row mb-4">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h3 class="mb-0 fw-bold">Invoice Management</h3>
                    <p class="text-muted mb-0">Create and manage student invoices</p>
                </div>
                <a href="{{ route('admin.invoices.create') }}" class="btn btn-primary">
                    <i class="ti ti-plus me-2"></i>Create Invoice
                </a>
            </div>
        </div>
    </div>

    <!-- Summary Cards -->
    <div class="row mb-4">
        <div class="col-lg-3 col-md-6 mb-3">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="p-3 bg-primary bg-opacity-10 rounded me-3">
                            <iconify-icon icon="solar:receipt-bold-duotone" class="fs-1 text-primary"></iconify-icon>
                        </div>
                        <div>
                            <h6 class="text-muted mb-1 fw-normal">Total Invoices</h6>
                            <h3 class="mb-0 fw-bold">${{ number_format($summary['total'], 2) }}</h3>
                            <small class="text-muted">{{ $summary['count'] }} invoices</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-3">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="p-3 bg-success bg-opacity-10 rounded me-3">
                            <iconify-icon icon="solar:check-circle-bold-duotone" class="fs-1 text-success"></iconify-icon>
                        </div>
                        <div>
                            <h6 class="text-muted mb-1 fw-normal">Paid</h6>
                            <h3 class="mb-0 fw-bold text-success">${{ number_format($summary['paid'], 2) }}</h3>
                            <small class="text-muted">Received payments</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-3">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="p-3 bg-warning bg-opacity-10 rounded me-3">
                            <iconify-icon icon="solar:clock-circle-bold-duotone" class="fs-1 text-warning"></iconify-icon>
                        </div>
                        <div>
                            <h6 class="text-muted mb-1 fw-normal">Pending</h6>
                            <h3 class="mb-0 fw-bold text-warning">${{ number_format($summary['pending'], 2) }}</h3>
                            <small class="text-muted">Outstanding</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-3">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="p-3 bg-danger bg-opacity-10 rounded me-3">
                            <iconify-icon icon="solar:danger-triangle-bold-duotone" class="fs-1 text-danger"></iconify-icon>
                        </div>
                        <div>
                            <h6 class="text-muted mb-1 fw-normal">Overdue</h6>
                            <h3 class="mb-0 fw-bold text-danger">${{ number_format($summary['overdue'], 2) }}</h3>
                            <small class="text-muted">Past due date</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Filters -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-white border-0 py-3">
                    <h5 class="mb-0 fw-bold">Filters</h5>
                </div>
                <div class="card-body">
                    <form method="GET" action="{{ route('admin.invoices.index') }}" id="filterForm">
                        <div class="row g-3">
                            <div class="col-md-3">
                                <label class="form-label small">Search</label>
                                <input type="text" class="form-control form-control-sm" name="search" value="{{ request('search') }}" placeholder="Invoice #, Title, Student...">
                            </div>
                            <div class="col-md-2">
                                <label class="form-label small">Status</label>
                                <select class="form-select form-select-sm" name="status">
                                    <option value="">All Status</option>
                                    <option value="draft" {{ request('status') == 'draft' ? 'selected' : '' }}>Draft</option>
                                    <option value="sent" {{ request('status') == 'sent' ? 'selected' : '' }}>Sent</option>
                                    <option value="paid" {{ request('status') == 'paid' ? 'selected' : '' }}>Paid</option>
                                    <option value="partial" {{ request('status') == 'partial' ? 'selected' : '' }}>Partial</option>
                                    <option value="overdue" {{ request('status') == 'overdue' ? 'selected' : '' }}>Overdue</option>
                                    <option value="cancelled" {{ request('status') == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label class="form-label small">Student</label>
                                <select class="form-select form-select-sm" name="student_id">
                                    <option value="">All Students</option>
                                    @foreach($students as $student)
                                        <option value="{{ $student->id }}" {{ request('student_id') == $student->id ? 'selected' : '' }}>
                                            {{ $student->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label class="form-label small">Currency</label>
                                <select class="form-select form-select-sm" name="currency">
                                    <option value="">All Currencies</option>
                                    @foreach(config('currencies.currencies') as $code => $currency)
                                        <option value="{{ $code }}" {{ request('currency') == $code ? 'selected' : '' }}>
                                            {{ $currency['code'] }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label class="form-label small">Type</label>
                                <select class="form-select form-select-sm" name="invoice_type">
                                    <option value="">All Types</option>
                                    <option value="one_time" {{ request('invoice_type') == 'one_time' ? 'selected' : '' }}>One Time</option>
                                    <option value="monthly" {{ request('invoice_type') == 'monthly' ? 'selected' : '' }}>Monthly</option>
                                    <option value="custom" {{ request('invoice_type') == 'custom' ? 'selected' : '' }}>Custom</option>
                                </select>
                            </div>
                            <div class="col-md-1">
                                <label class="form-label small">&nbsp;</label>
                                <button type="submit" class="btn btn-primary btn-sm w-100">
                                    <i class="ti ti-filter"></i> Filter
                                </button>
                            </div>
                        </div>
                        <div class="row g-3 mt-2">
                            <div class="col-md-3">
                                <label class="form-label small">Invoice Date From</label>
                                <input type="date" class="form-control form-control-sm" name="date_from" value="{{ request('date_from') }}">
                            </div>
                            <div class="col-md-3">
                                <label class="form-label small">Invoice Date To</label>
                                <input type="date" class="form-control form-control-sm" name="date_to" value="{{ request('date_to') }}">
                            </div>
                            <div class="col-md-3">
                                <label class="form-label small">Due Date From</label>
                                <input type="date" class="form-control form-control-sm" name="due_date_from" value="{{ request('due_date_from') }}">
                            </div>
                            <div class="col-md-3">
                                <label class="form-label small">Due Date To</label>
                                <input type="date" class="form-control form-control-sm" name="due_date_to" value="{{ request('due_date_to') }}">
                            </div>
                        </div>
                        @php
                            $hasFilters = request()->filled('search') || request()->filled('status') || request()->filled('student_id') || 
                                         request()->filled('currency') || request()->filled('invoice_type') || request()->filled('date_from') || 
                                         request()->filled('date_to') || request()->filled('due_date_from') || request()->filled('due_date_to');
                        @endphp
                        @if($hasFilters)
                        <div class="mt-3">
                            <a href="{{ route('admin.invoices.index') }}" class="btn btn-sm btn-outline-secondary">
                                <i class="ti ti-x me-1"></i>Clear Filters
                            </a>
                        </div>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Invoices Table -->
    <div class="row">
        <div class="col-12">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover" id="invoicesTable">
                            <thead>
                                <tr>
                                    <th>Invoice #</th>
                                    <th>Student</th>
                                    <th>Title</th>
                                    <th>Date</th>
                                    <th>Due Date</th>
                                    <th>Amount</th>
                                    <th>Paid</th>
                                    <th>Remaining</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($invoices as $invoice)
                                <tr>
                                    <td><strong>{{ $invoice->invoice_number }}</strong></td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="avatar-xs bg-primary bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center me-2" style="width: 35px; height: 35px;">
                                                <span class="text-primary fw-bold">{{ strtoupper(substr($invoice->student->name, 0, 1)) }}</span>
                                            </div>
                                            <span>{{ $invoice->student->name }}</span>
                                        </div>
                                    </td>
                                    <td>{{ $invoice->title }}</td>
                                    <td>{{ $invoice->invoice_date->format('M d, Y') }}</td>
                                    <td>
                                        {{ $invoice->due_date->format('M d, Y') }}
                                        @if($invoice->isOverdue())
                                            <span class="badge bg-danger badge-sm ms-1">Overdue</span>
                                        @endif
                                    </td>
                                    @php
                                        $currencySymbol = \App\Helpers\CurrencyHelper::getCurrencySymbol($invoice->currency);
                                    @endphp
                                    <td><strong>{{ $currencySymbol }}{{ number_format($invoice->total_amount, 2) }}</strong> <small class="text-muted">({{ $invoice->currency }})</small></td>
                                    <td class="text-success">{{ $currencySymbol }}{{ number_format($invoice->paid_amount, 2) }}</td>
                                    <td class="text-warning">{{ $currencySymbol }}{{ number_format($invoice->remaining_amount, 2) }}</td>
                                    <td>
                                        <span class="badge bg-{{ $invoice->status === 'paid' ? 'success' : ($invoice->status === 'overdue' ? 'danger' : ($invoice->status === 'partial' ? 'warning' : ($invoice->status === 'sent' ? 'info' : 'secondary'))) }}">
                                            {{ ucfirst($invoice->status) }}
                                        </span>
                                    </td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <a href="{{ route('admin.invoices.show', $invoice) }}" class="btn btn-sm btn-outline-info" title="View">
                                                <i class="ti ti-eye"></i>
                                            </a>
                                            <a href="{{ route('admin.invoices.download', $invoice) }}" target="_blank" class="btn btn-sm btn-outline-primary" title="Download">
                                                <i class="ti ti-download"></i>
                                            </a>
                                        </div>
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
</div>

@push('scripts')
<script>
    $(document).ready(function() {
        @php
            $hasFilters = request()->filled('search') || request()->filled('status') || request()->filled('student_id') || 
                         request()->filled('currency') || request()->filled('invoice_type') || request()->filled('date_from') || 
                         request()->filled('date_to') || request()->filled('due_date_from') || request()->filled('due_date_to');
        @endphp
        
        @if(!$hasFilters)
        // Initialize DataTable with full features when no filters
        $('#invoicesTable').DataTable({
            pageLength: 25,
            order: [[0, 'desc']],
            language: {
                search: "Search invoices:",
                lengthMenu: "Show _MENU_ invoices per page",
                info: "Showing _START_ to _END_ of _TOTAL_ invoices",
            }
        });
        @else
        // If filters are applied, use simple table with pagination (server-side filtering)
        $('#invoicesTable').DataTable({
            paging: true,
            searching: false, // Disable client-side search since we have server-side filters
            ordering: true,
            info: true,
            pageLength: 25,
            order: [[0, 'desc']],
            language: {
                lengthMenu: "Show _MENU_ invoices per page",
                info: "Showing _START_ to _END_ of _TOTAL_ invoices",
            }
        });
        @endif
    });
</script>
@endpush
@endsection

