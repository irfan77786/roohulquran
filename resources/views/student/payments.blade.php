@extends('student.main')

@section('title', 'Payments')

@section('content')
<div class="container-fluid">
    <!-- Page Header -->
    <div class="page-header">
        <div class="d-flex justify-content-between align-items-center">
            <div>
                <h2>Payment History</h2>
                <p>View your payment transactions and outstanding balances</p>
            </div>
        </div>
    </div>

    <!-- Payment Summary Cards -->
    <div class="row mb-4">
        <div class="col-lg-3 col-md-6 mb-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="avatar-xs bg-primary bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px;">
                            <iconify-icon icon="solar:wallet-money-bold-duotone" class="text-primary" style="font-size: 1.5rem;"></iconify-icon>
                        </div>
                        <div>
                            <small class="text-muted d-block">Total Payments</small>
                            <h4 class="mb-0 fw-bold text-primary">{{ $currencySymbol ?? '$' }}{{ number_format($summary['total'], 2) }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="avatar-xs bg-success bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px;">
                            <iconify-icon icon="solar:check-circle-bold-duotone" class="text-success" style="font-size: 1.5rem;"></iconify-icon>
                        </div>
                        <div>
                            <small class="text-muted d-block">Paid</small>
                            <h4 class="mb-0 fw-bold text-success">{{ $currencySymbol ?? '$' }}{{ number_format($summary['paid'], 2) }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="avatar-xs bg-warning bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px;">
                            <iconify-icon icon="solar:clock-circle-bold-duotone" class="text-warning" style="font-size: 1.5rem;"></iconify-icon>
                        </div>
                        <div>
                            <small class="text-muted d-block">Pending</small>
                            <h4 class="mb-0 fw-bold text-warning">{{ $currencySymbol ?? '$' }}{{ number_format($summary['pending'], 2) }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="avatar-xs bg-danger bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px;">
                            <iconify-icon icon="solar:danger-triangle-bold-duotone" class="text-danger" style="font-size: 1.5rem;"></iconify-icon>
                        </div>
                        <div>
                            <small class="text-muted d-block">Overdue</small>
                            <h4 class="mb-0 fw-bold text-danger">{{ $currencySymbol ?? '$' }}{{ number_format($summary['overdue'], 2) }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Filters -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5><i class="ti ti-filter me-2"></i>Filters</h5>
                </div>
                <div class="card-body">
                    <form method="GET" action="{{ route('student.payments') }}" id="filterForm">
                        <div class="row g-3">
                            <div class="col-md-4">
                                <label class="form-label small">Search</label>
                                <input type="text" class="form-control form-control-sm" name="search" value="{{ request('search') }}" placeholder="Invoice #, Amount, Course...">
                            </div>
                            <div class="col-md-3">
                                <label class="form-label small">Payment Status</label>
                                <select class="form-select form-select-sm" name="status">
                                    <option value="">All Status</option>
                                    <option value="paid" {{ request('status') == 'paid' ? 'selected' : '' }}>Paid</option>
                                    <option value="pending" {{ request('status') == 'pending' ? 'selected' : '' }}>Pending</option>
                                    <option value="overdue" {{ request('status') == 'overdue' ? 'selected' : '' }}>Overdue</option>
                                    <option value="cancelled" {{ request('status') == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label small">Invoice Status</label>
                                <select class="form-select form-select-sm" name="invoice_status">
                                    <option value="">All Invoice Status</option>
                                    <option value="paid" {{ request('invoice_status') == 'paid' ? 'selected' : '' }}>Paid</option>
                                    <option value="sent" {{ request('invoice_status') == 'sent' ? 'selected' : '' }}>Sent</option>
                                    <option value="partial" {{ request('invoice_status') == 'partial' ? 'selected' : '' }}>Partial</option>
                                    <option value="overdue" {{ request('invoice_status') == 'overdue' ? 'selected' : '' }}>Overdue</option>
                                    <option value="draft" {{ request('invoice_status') == 'draft' ? 'selected' : '' }}>Draft</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label class="form-label small">&nbsp;</label>
                                <button type="submit" class="btn btn-primary btn-sm w-100">
                                    <i class="ti ti-filter me-1"></i>Filter
                                </button>
                            </div>
                        </div>
                        <div class="row g-3 mt-2">
                            <div class="col-md-4">
                                <label class="form-label small">Date From</label>
                                <input type="date" class="form-control form-control-sm" name="date_from" value="{{ request('date_from') }}">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label small">Date To</label>
                                <input type="date" class="form-control form-control-sm" name="date_to" value="{{ request('date_to') }}">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label small">&nbsp;</label>
                                @php
                                    $hasFilters = request()->filled('search') || request()->filled('status') || request()->filled('invoice_status') || request()->filled('date_from') || request()->filled('date_to');
                                @endphp
                                @if($hasFilters)
                                <a href="{{ route('student.payments') }}" class="btn btn-sm btn-outline-secondary w-100">
                                    <i class="ti ti-x me-1"></i>Clear Filters
                                </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Invoices Section -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5><i class="ti ti-file-invoice me-2"></i>My Invoices</h5>
                </div>
                <div class="card-body">
                    @if(isset($invoices) && $invoices->count() > 0)
                        <div class="table-responsive">
                            <table class="table" id="invoicesTable">
                                <thead>
                                    <tr>
                                        <th>Invoice #</th>
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
                                        <td><strong class="text-primary">{{ $invoice->invoice_number }}</strong></td>
                                        <td>{{ $invoice->title }}</td>
                                        <td>{{ \App\Helpers\TimezoneHelper::formatForStudent($invoice->invoice_date, $student->country ?? null, 'M d, Y') }}</td>
                                        <td>
                                            {{ \App\Helpers\TimezoneHelper::formatForStudent($invoice->due_date, $student->country ?? null, 'M d, Y') }}
                                            @if($invoice->isOverdue())
                                                <span class="badge bg-danger badge-sm ms-1">Overdue</span>
                                            @endif
                                        </td>
                                        <td><strong>{{ $currencySymbol }}{{ number_format($invoice->total_amount, 2) }}</strong></td>
                                        <td class="text-success">{{ $currencySymbol }}{{ number_format($invoice->paid_amount, 2) }}</td>
                                        <td class="text-warning">{{ $currencySymbol }}{{ number_format($invoice->remaining_amount, 2) }}</td>
                                        <td>
                                            <span class="badge bg-{{ $invoice->status === 'paid' ? 'success' : ($invoice->status === 'overdue' ? 'danger' : ($invoice->status === 'partial' ? 'warning' : ($invoice->status === 'sent' ? 'info' : 'secondary'))) }}">
                                                {{ ucfirst($invoice->status) }}
                                            </span>
                                        </td>
                                        <td>
                                            <a href="{{ route('student.invoice.download', $invoice) }}" class="btn btn-sm btn-primary" title="Download PDF">
                                                <i class="ti ti-download me-1"></i>Download PDF
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <div class="empty-state">
                            <iconify-icon icon="solar:receipt-bold-duotone"></iconify-icon>
                            <h5>No Invoices Found</h5>
                            <p>Your invoices will appear here once they are generated</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <!-- Payment Transactions Section -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5><i class="ti ti-receipt me-2"></i>Payment Transactions</h5>
                </div>
                <div class="card-body">
                    @if($payments->count() > 0)
                        <div class="table-responsive">
                            <table class="table" id="paymentsTable">
                                <thead>
                                    <tr>
                                        <th>Invoice #</th>
                                        <th>Course</th>
                                        <th>Amount</th>
                                        <th>Due Date</th>
                                        <th>Paid Date</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($payments as $payment)
                                    <tr>
                                        <td>
                                            <strong class="text-primary">#{{ $payment->invoice_number ?? 'N/A' }}</strong>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="avatar-xs bg-info bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center me-2" style="width: 35px; height: 35px;">
                                                    <iconify-icon icon="solar:book-bold-duotone" class="text-info"></iconify-icon>
                                                </div>
                                                <span>{{ $payment->enrollment->course->name ?? 'N/A' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <strong class="text-success">{{ $currencySymbol }}{{ number_format($payment->amount, 2) }}</strong>
                                        </td>
                                        <td>
                                            <small class="text-muted">
                                                @if($payment->due_date)
                                                    {{ \App\Helpers\TimezoneHelper::formatForStudent($payment->due_date, $student->country ?? null, 'M d, Y') }}
                                                @else
                                                    N/A
                                                @endif
                                            </small>
                                        </td>
                                        <td>
                                            @if($payment->paid_date)
                                                <small class="text-success">
                                                    <i class="ti ti-check me-1"></i>{{ \App\Helpers\TimezoneHelper::formatForStudent($payment->paid_date, $student->country ?? null, 'M d, Y') }}
                                                </small>
                                            @else
                                                <small class="text-muted">-</small>
                                            @endif
                                        </td>
                                        <td>
                                            <span class="badge bg-{{ $payment->status === 'paid' ? 'success' : ($payment->status === 'pending' ? 'warning' : 'danger') }}">
                                                <i class="ti ti-{{ $payment->status === 'paid' ? 'check-circle' : ($payment->status === 'pending' ? 'clock' : 'x-circle') }} me-1"></i>
                                                {{ ucfirst($payment->status) }}
                                            </span>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <div class="empty-state">
                            <iconify-icon icon="solar:wallet-money-bold-duotone"></iconify-icon>
                            <h5>No Payment Records Found</h5>
                            <p>Your payment history will appear here once you make a payment</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    $(document).ready(function() {
        @php
            $hasFilters = request()->filled('search') || request()->filled('status') || request()->filled('invoice_status') || request()->filled('date_from') || request()->filled('date_to');
        @endphp
        
        @if(isset($invoices) && $invoices->count() > 0)
        $('#invoicesTable').DataTable({
            pageLength: 10,
            order: [[0, 'desc']],
            searching: {{ $hasFilters ? 'false' : 'true' }},
            language: {
                search: "Search invoices:",
                lengthMenu: "Show _MENU_ invoices per page",
                info: "Showing _START_ to _END_ of _TOTAL_ invoices",
            }
        });
        @endif
        
        $('#paymentsTable').DataTable({
            pageLength: 10,
            order: [[4, 'desc']],
            searching: {{ $hasFilters ? 'false' : 'true' }},
            language: {
                search: "Search payments:",
                lengthMenu: "Show _MENU_ payments per page",
                info: "Showing _START_ to _END_ of _TOTAL_ payments",
                paginate: {
                    previous: "<i class='ti ti-chevron-left'></i>",
                    next: "<i class='ti ti-chevron-right'></i>"
                }
            }
        });
    });
</script>
@endpush
@endsection
