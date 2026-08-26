@extends('admin.main')

@section('content')
<div class="container-fluid">
    <div class="row mb-4">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h3 class="mb-0 fw-bold">Edit Invoice</h3>
                    <p class="text-muted mb-0">Invoice #{{ $invoice->invoice_number }}</p>
                </div>
                <a href="{{ route('admin.invoices.show', $invoice) }}" class="btn btn-secondary">
                    <i class="ti ti-arrow-left me-2"></i>Back to Invoice
                </a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <form action="{{ route('admin.invoices.update', $invoice) }}" method="POST" id="invoiceForm">
                        @csrf
                        @method('PUT')
                        
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Student <span class="text-danger">*</span></label>
                                <select class="form-select" name="student_id" id="student_id" required>
                                    <option value="">Select Student</option>
                                    @foreach($students as $student)
                                        <option value="{{ $student->id }}" {{ $invoice->student_id == $student->id ? 'selected' : '' }}>
                                            {{ $student->name }} ({{ $student->email ?? 'No email' }})
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Enrollment (Optional)</label>
                                <select class="form-select" name="enrollment_id" id="enrollment_id">
                                    <option value="">Select Enrollment</option>
                                    @foreach($enrollments as $enrollment)
                                        <option value="{{ $enrollment->id }}" {{ $invoice->enrollment_id == $enrollment->id ? 'selected' : '' }}>
                                            {{ $enrollment->student->name }} - {{ $enrollment->course->name ?? 'N/A' }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Invoice Title <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="title" value="{{ old('title', $invoice->title) }}" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Invoice Type <span class="text-danger">*</span></label>
                                <select class="form-select" name="invoice_type" id="invoice_type" required>
                                    <option value="one_time" {{ $invoice->invoice_type == 'one_time' ? 'selected' : '' }}>One Time</option>
                                    <option value="monthly" {{ $invoice->invoice_type == 'monthly' ? 'selected' : '' }}>Monthly</option>
                                    <option value="custom" {{ $invoice->invoice_type == 'custom' ? 'selected' : '' }}>Custom Period</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Currency <span class="text-danger">*</span></label>
                                <select class="form-select" name="currency" id="currency" required>
                                    @foreach(config('currencies.currencies') as $code => $currency)
                                        <option value="{{ $code }}" data-symbol="{{ $currency['symbol'] }}" {{ $invoice->currency === $code ? 'selected' : '' }}>
                                            {{ $currency['name'] }} ({{ $currency['symbol'] }})
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="form-label">Invoice Date <span class="text-danger">*</span></label>
                                <input type="date" class="form-control" name="invoice_date" value="{{ old('invoice_date', $invoice->invoice_date->format('Y-m-d')) }}" required>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="form-label">Due Date <span class="text-danger">*</span></label>
                                <input type="date" class="form-control" name="due_date" value="{{ old('due_date', $invoice->due_date->format('Y-m-d')) }}" required>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="form-label">Status <span class="text-danger">*</span></label>
                                <select class="form-select" name="status" required>
                                    <option value="draft" {{ $invoice->status == 'draft' ? 'selected' : '' }}>Draft</option>
                                    <option value="sent" {{ $invoice->status == 'sent' ? 'selected' : '' }}>Sent</option>
                                    <option value="paid" {{ $invoice->status == 'paid' ? 'selected' : '' }}>Paid</option>
                                    <option value="partial" {{ $invoice->status == 'partial' ? 'selected' : '' }}>Partial</option>
                                    <option value="overdue" {{ $invoice->status == 'overdue' ? 'selected' : '' }}>Overdue</option>
                                    <option value="cancelled" {{ $invoice->status == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3" id="start_date_field" style="display: {{ in_array($invoice->invoice_type, ['monthly', 'custom']) ? 'block' : 'none' }};">
                                <label class="form-label">Start Date</label>
                                <input type="date" class="form-control" name="start_date" value="{{ old('start_date', $invoice->start_date ? $invoice->start_date->format('Y-m-d') : '') }}">
                            </div>
                            <div class="col-md-6 mb-3" id="end_date_field" style="display: {{ in_array($invoice->invoice_type, ['monthly', 'custom']) ? 'block' : 'none' }};">
                                <label class="form-label">End Date</label>
                                <input type="date" class="form-control" name="end_date" value="{{ old('end_date', $invoice->end_date ? $invoice->end_date->format('Y-m-d') : '') }}">
                            </div>
                        </div>

                        <hr class="my-4">

                        <h5 class="mb-3">Invoice Items</h5>
                        <div id="invoiceItems">
                            @if($invoice->items && count($invoice->items) > 0)
                                @foreach($invoice->items as $index => $item)
                                <div class="row mb-3 item-row">
                                    <div class="col-md-5">
                                        <input type="text" class="form-control" name="items[{{ $index }}][description]" value="{{ $item['description'] ?? '' }}" placeholder="Item description" required>
                                    </div>
                                    <div class="col-md-2">
                                        <input type="number" class="form-control quantity" name="items[{{ $index }}][quantity]" value="{{ $item['quantity'] ?? 1 }}" min="0" step="0.01" placeholder="Qty" required>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="number" class="form-control price" name="items[{{ $index }}][price]" value="{{ $item['price'] ?? 0 }}" min="0" step="0.01" placeholder="Price" required>
                                    </div>
                                    <div class="col-md-2">
                                        <button type="button" class="btn btn-danger btn-sm remove-item">
                                            <i class="ti ti-trash"></i>
                                        </button>
                                    </div>
                                </div>
                                @endforeach
                            @else
                                <div class="row mb-3 item-row">
                                    <div class="col-md-5">
                                        <input type="text" class="form-control" name="items[0][description]" placeholder="Item description" required>
                                    </div>
                                    <div class="col-md-2">
                                        <input type="number" class="form-control quantity" name="items[0][quantity]" value="1" min="0" step="0.01" placeholder="Qty" required>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="number" class="form-control price" name="items[0][price]" value="0" min="0" step="0.01" placeholder="Price" required>
                                    </div>
                                    <div class="col-md-2">
                                        <button type="button" class="btn btn-danger btn-sm remove-item" style="display: none;">
                                            <i class="ti ti-trash"></i>
                                        </button>
                                    </div>
                                </div>
                            @endif
                        </div>
                        <button type="button" class="btn btn-outline-primary btn-sm mb-3" id="addItem">
                            <i class="ti ti-plus me-2"></i>Add Item
                        </button>

                        <hr class="my-4">

                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <label class="form-label">Subtotal</label>
                                <input type="number" class="form-control" name="subtotal" id="subtotal" value="{{ old('subtotal', $invoice->subtotal) }}" step="0.01" min="0" required>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="form-label">Tax (%)</label>
                                <input type="number" class="form-control" name="tax" id="tax" value="{{ old('tax', $invoice->subtotal > 0 ? ($invoice->tax / $invoice->subtotal * 100) : 0) }}" step="0.01" min="0" placeholder="0" onchange="calculateTotal()">
                                <small class="text-muted">Enter tax as percentage</small>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="form-label">Discount</label>
                                <input type="number" class="form-control" name="discount" id="discount" value="{{ old('discount', $invoice->discount) }}" step="0.01" min="0" placeholder="0" onchange="calculateTotal()">
                            </div>
                            <div class="col-md-12 mb-3">
                                <div class="card bg-light">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h5 class="mb-0">Total Amount:</h5>
                                            <h3 class="mb-0 text-primary" id="totalAmount">
                                                <span id="currencySymbol">{{ $invoice->currency ? config('currencies.currencies.' . $invoice->currency . '.symbol', '$') : '$' }}</span>{{ number_format($invoice->total_amount, 2) }}
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label class="form-label">Bill To (Parent/Guardian Details)</label>
                                <textarea class="form-control" name="bill_to" rows="4" placeholder="Enter parent/guardian name, email, phone, and address. Leave empty to use student information.">{{ old('bill_to', $invoice->bill_to) }}</textarea>
                                <small class="text-muted">Enter custom billing information. If left empty, student information will be used.</small>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label class="form-label">Description</label>
                                <textarea class="form-control" name="description" rows="3">{{ old('description', $invoice->description) }}</textarea>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label class="form-label">Additional Notes</label>
                                <textarea class="form-control" name="notes" rows="2">{{ old('notes', $invoice->notes) }}</textarea>
                            </div>
                        </div>

                        <div class="mt-4">
                            <button type="submit" class="btn btn-primary">
                                <i class="ti ti-device-floppy me-2"></i>Update Invoice
                            </button>
                            <a href="{{ route('admin.invoices.show', $invoice) }}" class="btn btn-secondary">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
let itemCount = {{ $invoice->items ? count($invoice->items) : 1 }};

document.getElementById('invoice_type').addEventListener('change', function() {
    const type = this.value;
    const startDateField = document.getElementById('start_date_field');
    const endDateField = document.getElementById('end_date_field');
    
    if (type === 'monthly' || type === 'custom') {
        startDateField.style.display = 'block';
        endDateField.style.display = 'block';
    } else {
        startDateField.style.display = 'none';
        endDateField.style.display = 'none';
    }
});

document.getElementById('addItem').addEventListener('click', function() {
    const itemsContainer = document.getElementById('invoiceItems');
    const newRow = document.createElement('tr');
    newRow.className = 'item-row';
    newRow.innerHTML = `
        <td>
            <input type="text" class="form-control" name="items[${itemCount}][description]" placeholder="Subject name" required>
        </td>
        <td>
            <input type="number" class="form-control quantity" name="items[${itemCount}][quantity]" value="1" min="0" step="0.01" placeholder="Students" required>
        </td>
        <td>
            <input type="number" class="form-control price" name="items[${itemCount}][price]" value="0" min="0" step="0.01" placeholder="Total Fee" required>
        </td>
        <td>
            <button type="button" class="btn btn-danger btn-sm remove-item">
                <i class="ti ti-trash"></i>
            </button>
        </td>
    `;
    itemsContainer.appendChild(newRow);
    itemCount++;
    attachItemListeners();
});

function attachItemListeners() {
    document.querySelectorAll('.remove-item').forEach(btn => {
        btn.addEventListener('click', function() {
            this.closest('.item-row').remove();
            calculateTotal();
        });
    });
    
    document.querySelectorAll('.quantity, .price').forEach(input => {
        input.addEventListener('input', function() {
            updateItemTotal(this);
            calculateTotal();
        });
    });
}

function updateItemTotal(input) {
    // Price is now the total fee directly, no calculation needed
    calculateTotal();
}

function calculateTotal() {
    let subtotal = 0;
    document.querySelectorAll('.item-row').forEach(row => {
        const price = parseFloat(row.querySelector('.price').value) || 0;
        subtotal += price; // Price is now the total fee directly
    });
    
    document.getElementById('subtotal').value = subtotal.toFixed(2);
    
    const taxPercent = parseFloat(document.getElementById('tax').value) || 0;
    const discount = parseFloat(document.getElementById('discount').value) || 0;
    const taxAmount = (subtotal * taxPercent) / 100;
    const total = (subtotal + taxAmount) - discount;
    
    const currencySelect = document.getElementById('currency');
    const selectedCurrency = currencySelect.options[currencySelect.selectedIndex];
    const symbol = selectedCurrency.getAttribute('data-symbol') || '$';
    
    document.getElementById('totalAmount').innerHTML = '<span id="currencySymbol">' + symbol + '</span>' + total.toFixed(2);
}

document.getElementById('tax').addEventListener('input', calculateTotal);
document.getElementById('discount').addEventListener('input', calculateTotal);
document.getElementById('subtotal').addEventListener('input', calculateTotal);

document.getElementById('currency').addEventListener('change', function() {
    const selectedOption = this.options[this.selectedIndex];
    const symbol = selectedOption.getAttribute('data-symbol');
    document.getElementById('currencySymbol').textContent = symbol;
    calculateTotal();
});

attachItemListeners();
</script>
@endpush
@endsection

