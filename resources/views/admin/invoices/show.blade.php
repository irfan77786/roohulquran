@extends('admin.main')

@section('content')
<div class="container-fluid">
    <div class="row mb-4">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h3 class="mb-0 fw-bold">Invoice Details</h3>
                    <p class="text-muted mb-0">Invoice #{{ $invoice->invoice_number }}</p>
                </div>
                <div>
                    <a href="{{ route('admin.invoices.download', $invoice) }}" target="_blank" class="btn btn-primary">
                        <i class="ti ti-download me-2"></i>Download PDF
                    </a>
                    <a href="{{ route('admin.invoices.edit', $invoice) }}" class="btn btn-outline-primary">
                        <i class="ti ti-edit me-2"></i>Edit
                    </a>
                    <a href="{{ route('admin.invoices.index') }}" class="btn btn-secondary">
                        <i class="ti ti-arrow-left me-2"></i>Back
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- Invoice Information -->
        <div class="col-lg-8 mb-4">
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-header bg-white border-0 py-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="mb-0 fw-bold">Invoice Information</h5>
                        <span class="badge bg-{{ $invoice->status === 'paid' ? 'success' : ($invoice->status === 'overdue' ? 'danger' : ($invoice->status === 'partial' ? 'warning' : ($invoice->status === 'sent' ? 'info' : 'secondary'))) }} px-3 py-2">
                            {{ strtoupper($invoice->status) }}
                        </span>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <small class="text-muted d-block mb-1">Invoice Number</small>
                            <strong>{{ $invoice->invoice_number }}</strong>
                        </div>
                        <div class="col-md-6 mb-3">
                            <small class="text-muted d-block mb-1">Title</small>
                            <strong>{{ $invoice->title }}</strong>
                        </div>
                        <div class="col-md-6 mb-3">
                            <small class="text-muted d-block mb-1">Student</small>
                            <strong>{{ $invoice->student->name }}</strong>
                            <br><small class="text-muted">{{ $invoice->student->email ?? 'No email' }}</small>
                        </div>
                        <div class="col-md-6 mb-3">
                            <small class="text-muted d-block mb-1">Course</small>
                            <strong>{{ $invoice->enrollment->course->name ?? 'N/A' }}</strong>
                        </div>
                        <div class="col-md-4 mb-3">
                            <small class="text-muted d-block mb-1">Invoice Date</small>
                            <strong>{{ $invoice->invoice_date->format('M d, Y') }}</strong>
                        </div>
                        <div class="col-md-4 mb-3">
                            <small class="text-muted d-block mb-1">Due Date</small>
                            <strong class="{{ $invoice->isOverdue() ? 'text-danger' : '' }}">{{ $invoice->due_date->format('M d, Y') }}</strong>
                        </div>
                        <div class="col-md-4 mb-3">
                            <small class="text-muted d-block mb-1">Invoice Type</small>
                            <strong>{{ ucfirst(str_replace('_', ' ', $invoice->invoice_type)) }}</strong>
                        </div>
                        @if($invoice->start_date && $invoice->end_date)
                        <div class="col-md-6 mb-3">
                            <small class="text-muted d-block mb-1">Period</small>
                            <strong>{{ $invoice->start_date->format('M d, Y') }} - {{ $invoice->end_date->format('M d, Y') }}</strong>
                        </div>
                        @endif
                        @if($invoice->description)
                        <div class="col-12 mb-3">
                            <small class="text-muted d-block mb-1">Description</small>
                            <p class="mb-0">{{ $invoice->description }}</p>
                        </div>
                        @endif
                    </div>
                </div>
            </div>

            <!-- Invoice Items -->
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-header bg-white border-0 py-3">
                    <h5 class="mb-0 fw-bold">Invoice Items</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Subject</th>
                                    <th class="text-center">Students</th>
                                    <th class="text-end">Total Fee</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($invoice->items && count($invoice->items) > 0)
                                    @foreach($invoice->items as $item)
                                    <tr>
                                        <td>{{ $item['description'] ?? 'N/A' }}</td>
                                        <td class="text-center">{{ $item['quantity'] ?? 1 }}</td>
                                        <td class="text-end">{{ \App\Helpers\CurrencyHelper::getCurrencySymbol($invoice->currency) }}{{ number_format($item['price'] ?? 0, 2) }}</td>
                                    </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="4" class="text-center text-muted">No items specified</td>
                                    </tr>
                                @endif
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="3" class="text-end"><strong>Subtotal:</strong></td>
                                    <td class="text-end"><strong>${{ number_format($invoice->subtotal, 2) }}</strong></td>
                                </tr>
                                @if($invoice->tax > 0)
                                <tr>
                                    <td colspan="3" class="text-end">Tax:</td>
                                    <td class="text-end">${{ number_format($invoice->tax, 2) }}</td>
                                </tr>
                                @endif
                                @if($invoice->discount > 0)
                                <tr>
                                    <td colspan="3" class="text-end">Discount:</td>
                                    <td class="text-end text-danger">-${{ number_format($invoice->discount, 2) }}</td>
                                </tr>
                                @endif
                                <tr class="table-primary">
                                    <td colspan="3" class="text-end"><strong>Total Amount:</strong></td>
                                    <td class="text-end"><strong>${{ number_format($invoice->total_amount, 2) }}</strong></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Payment History -->
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-white border-0 py-3">
                    <h5 class="mb-0 fw-bold">Payment History</h5>
                </div>
                <div class="card-body">
                    @if($invoice->payments->count() > 0)
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Amount</th>
                                        <th>Method</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($invoice->payments as $payment)
                                    <tr>
                                        <td>{{ $payment->paid_date ? $payment->paid_date->format('M d, Y') : 'N/A' }}</td>
                                        <td><strong>${{ number_format($payment->amount, 2) }}</strong></td>
                                        <td>{{ ucfirst(str_replace('_', ' ', $payment->payment_method ?? 'N/A')) }}</td>
                                        <td>
                                            <span class="badge bg-success">Paid</span>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <p class="text-muted text-center py-3">No payments recorded yet</p>
                    @endif
                </div>
            </div>
        </div>

        <!-- Payment Summary & Actions -->
        <div class="col-lg-4">
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-header bg-white border-0 py-3">
                    <h5 class="mb-0 fw-bold">Payment Summary</h5>
                </div>
                <div class="card-body">
                    @php
                        $currencySymbol = \App\Helpers\CurrencyHelper::getCurrencySymbol($invoice->currency);
                    @endphp
                    <div class="mb-3 pb-3 border-bottom">
                        <small class="text-muted d-block mb-1">Total Amount</small>
                        <h4 class="mb-0 fw-bold">{{ $currencySymbol }}{{ number_format($invoice->total_amount, 2) }}</h4>
                        <small class="text-muted">{{ $invoice->currency }}</small>
                    </div>
                    <div class="mb-3 pb-3 border-bottom">
                        <small class="text-muted d-block mb-1">Paid Amount</small>
                        <h4 class="mb-0 fw-bold text-success">{{ $currencySymbol }}{{ number_format($invoice->paid_amount, 2) }}</h4>
                    </div>
                    <div class="mb-3">
                        <small class="text-muted d-block mb-1">Remaining Amount</small>
                        <h4 class="mb-0 fw-bold text-{{ $invoice->remaining_amount > 0 ? 'warning' : 'success' }}">
                            {{ $currencySymbol }}{{ number_format($invoice->remaining_amount, 2) }}
                        </h4>
                    </div>
                    @if($invoice->isOverdue())
                        <div class="alert alert-danger">
                            <i class="ti ti-alert-circle me-2"></i>This invoice is overdue
                        </div>
                    @endif
                </div>
            </div>

            @if($invoice->remaining_amount > 0 && $invoice->status !== 'cancelled')
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-header bg-white border-0 py-3">
                    <h5 class="mb-0 fw-bold">Record Payment</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.invoices.record-payment', $invoice) }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Payment Amount <span class="text-danger">*</span></label>
                            <input type="number" class="form-control" name="paid_amount" step="0.01" min="0.01" max="{{ $invoice->remaining_amount }}" value="{{ $invoice->remaining_amount }}" required>
                            <small class="text-muted">Maximum: {{ $currencySymbol }}{{ number_format($invoice->remaining_amount, 2) }}</small>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Payment Date <span class="text-danger">*</span></label>
                            <input type="date" class="form-control" name="payment_date" value="{{ date('Y-m-d') }}" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Payment Method</label>
                            <select class="form-select" name="payment_method">
                                <option value="cash">Cash</option>
                                <option value="bank_transfer">Bank Transfer</option>
                                <option value="credit_card">Credit Card</option>
                                <option value="paypal">PayPal</option>
                                <option value="stripe">Stripe</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Notes</label>
                            <textarea class="form-control" name="notes" rows="2"></textarea>
                        </div>
                        <button type="submit" class="btn btn-success w-100">
                            <i class="ti ti-check me-2"></i>Record Payment
                        </button>
                    </form>
                </div>
            </div>
            @endif

            @if($invoice->status === 'draft')
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <form action="{{ route('admin.invoices.send', $invoice) }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-info w-100">
                            <i class="ti ti-send me-2"></i>Mark as Sent
                        </button>
                    </form>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection

