<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Invoice;
use App\Models\Student;
use App\Models\Enrollment;
use App\Models\Payment;
use App\Models\StudentNotification;
use App\Helpers\CurrencyHelper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;

class InvoiceController extends Controller
{
    public function index(Request $request)
    {
        $query = Invoice::with(['student', 'enrollment.course']);

        // Filter by status
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        // Filter by student
        if ($request->filled('student_id')) {
            $query->where('student_id', $request->student_id);
        }

        // Filter by date range
        if ($request->filled('date_from')) {
            $query->whereDate('invoice_date', '>=', $request->date_from);
        }
        if ($request->filled('date_to')) {
            $query->whereDate('invoice_date', '<=', $request->date_to);
        }

        // Filter by due date range
        if ($request->filled('due_date_from')) {
            $query->whereDate('due_date', '>=', $request->due_date_from);
        }
        if ($request->filled('due_date_to')) {
            $query->whereDate('due_date', '<=', $request->due_date_to);
        }

        // Filter by currency
        if ($request->filled('currency')) {
            $query->where('currency', $request->currency);
        }

        // Filter by invoice type
        if ($request->filled('invoice_type')) {
            $query->where('invoice_type', $request->invoice_type);
        }

        // Search by invoice number or title
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('invoice_number', 'like', "%{$search}%")
                  ->orWhere('title', 'like', "%{$search}%")
                  ->orWhereHas('student', function($q) use ($search) {
                      $q->where('name', 'like', "%{$search}%")
                        ->orWhere('email', 'like', "%{$search}%");
                  });
            });
        }

        $invoices = $query->latest()->paginate(20)->withQueryString();

        // Get students for filter dropdown
        $students = Student::where('status', 'active')->orderBy('name')->get();
        
        // Calculate summary statistics (all invoices, not filtered)
        $summary = [
            'total' => Invoice::sum('total_amount'),
            'paid' => Invoice::where('status', 'paid')->sum('total_amount'),
            'pending' => Invoice::whereIn('status', ['draft', 'sent', 'partial'])->sum('remaining_amount'),
            'overdue' => Invoice::where('status', 'overdue')->sum('remaining_amount'),
            'count' => Invoice::count(),
        ];

        return view('admin.invoices.index', compact('invoices', 'summary', 'students'));
    }

    public function create()
    {
        $students = Student::where('status', 'active')->get();
        $enrollments = Enrollment::with(['student', 'course'])
            ->where('status', 'active')
            ->get();
        $currencies = config('currencies.currencies', []);

        return view('admin.invoices.create', compact('students', 'enrollments', 'currencies'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'student_id' => 'required|exists:students,id',
            'enrollment_id' => 'nullable|exists:enrollments,id',
            'title' => 'required|string|max:255',
            'invoice_date' => 'required|date',
            'due_date' => 'required|date|after_or_equal:invoice_date',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
            'invoice_type' => 'required|in:one_time,monthly,custom',
            'currency' => 'required|string|in:' . implode(',', array_keys(config('currencies.currencies', []))),
            'subtotal' => 'required|numeric|min:0',
            'tax' => 'nullable|numeric|min:0',
            'discount' => 'nullable|numeric|min:0',
            'description' => 'nullable|string',
            'bill_to' => 'nullable|string',
            'notes' => 'nullable|string',
            'items' => 'nullable|array',
            'items.*.description' => 'required_with:items|string',
            'items.*.quantity' => 'required_with:items|numeric|min:0',
            'items.*.price' => 'required_with:items|numeric|min:0',
        ]);

        // Auto-select currency based on student's country if not provided
        if (empty($validated['currency'])) {
            $student = Student::find($validated['student_id']);
            if ($student && $student->country) {
                $validated['currency'] = CurrencyHelper::getCurrencyFromCountry($student->country);
            } else {
                $validated['currency'] = config('currencies.default_currency', 'USD');
            }
        }

        // Calculate totals from items if provided
        $subtotal = $request->subtotal;
        if ($request->has('items') && is_array($request->items)) {
            $calculatedSubtotal = 0;
            foreach ($request->items as $item) {
                $price = $item['price'] ?? 0; // Price is now the total fee directly
                $calculatedSubtotal += $price;
            }
            if ($calculatedSubtotal > 0) {
                $subtotal = $calculatedSubtotal;
            }
        }
        
        $taxPercent = $request->tax ?? 0;
        $discount = $request->discount ?? 0;
        $taxAmount = ($subtotal * $taxPercent) / 100; // Calculate tax amount from percentage
        $totalAmount = ($subtotal + $taxAmount) - $discount;

        $validated['subtotal'] = $subtotal;
        $validated['tax'] = $taxAmount; // Store calculated tax amount (not percentage)
        $validated['discount'] = $discount;
        $validated['total_amount'] = $totalAmount;
        $validated['paid_amount'] = 0;
        $validated['remaining_amount'] = $totalAmount;
        $validated['status'] = $request->status ?? 'draft';
        $validated['items'] = $request->items ?? [];

        $invoice = Invoice::create($validated);
        $invoice->updateStatus();

        // Create notification for student
        $student = Student::find($validated['student_id']);
        if ($student) {
            $currencySymbol = CurrencyHelper::getCurrencySymbol($invoice->currency);
            StudentNotification::createNotification(
                $student->id,
                'invoice_created',
                'New Invoice Generated',
                "A new invoice #{$invoice->invoice_number} has been generated for you. Total amount: {$currencySymbol}" . number_format($invoice->total_amount, 2),
                'solar:receipt-bold-duotone',
                'info',
                ['invoice_id' => $invoice->id, 'invoice_number' => $invoice->invoice_number]
            );
        }

        return redirect()->route('admin.invoices.show', $invoice)
            ->with('success', 'Invoice created successfully');
    }

    public function show(Invoice $invoice)
    {
        $invoice->load(['student', 'enrollment.course', 'enrollment.classSession.teacher', 'payments']);
        
        return view('admin.invoices.show', compact('invoice'));
    }

    public function edit(Invoice $invoice)
    {
        $students = Student::where('status', 'active')->get();
        $enrollments = Enrollment::with(['student', 'course'])
            ->where('status', 'active')
            ->get();
        $currencies = config('currencies.currencies', []);

        return view('admin.invoices.edit', compact('invoice', 'students', 'enrollments', 'currencies'));
    }

    public function update(Request $request, Invoice $invoice)
    {
        $validated = $request->validate([
            'student_id' => 'required|exists:students,id',
            'enrollment_id' => 'nullable|exists:enrollments,id',
            'title' => 'required|string|max:255',
            'invoice_date' => 'required|date',
            'due_date' => 'required|date|after_or_equal:invoice_date',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
            'invoice_type' => 'required|in:one_time,monthly,custom',
            'currency' => 'required|string|in:' . implode(',', array_keys(config('currencies.currencies', []))),
            'subtotal' => 'required|numeric|min:0',
            'tax' => 'nullable|numeric|min:0',
            'discount' => 'nullable|numeric|min:0',
            'description' => 'nullable|string',
            'bill_to' => 'nullable|string',
            'notes' => 'nullable|string',
            'items' => 'nullable|array',
            'status' => 'required|in:draft,sent,paid,partial,overdue,cancelled',
        ]);

        // Calculate totals from items if provided
        $subtotal = $request->subtotal;
        if ($request->has('items') && is_array($request->items)) {
            $calculatedSubtotal = 0;
            foreach ($request->items as $item) {
                $price = $item['price'] ?? 0; // Price is now the total fee directly
                $calculatedSubtotal += $price;
            }
            if ($calculatedSubtotal > 0) {
                $subtotal = $calculatedSubtotal;
            }
        }
        
        $taxPercent = $request->tax ?? 0;
        $discount = $request->discount ?? 0;
        $taxAmount = ($subtotal * $taxPercent) / 100; // Calculate tax amount from percentage
        $totalAmount = ($subtotal + $taxAmount) - $discount;

        $validated['subtotal'] = $subtotal;
        $validated['tax'] = $taxAmount; // Store calculated tax amount (not percentage)
        $validated['discount'] = $discount;
        $validated['total_amount'] = $totalAmount;
        $validated['remaining_amount'] = $totalAmount - $invoice->paid_amount;
        $validated['items'] = $request->items ?? [];

        $oldStatus = $invoice->status;
        $invoice->update($validated);
        $invoice->updateStatus();

        // Notify student if status changed
        if ($oldStatus !== $invoice->status) {
            $student = $invoice->student;
            if ($student) {
                $statusLabels = [
                    'paid' => 'Paid',
                    'sent' => 'Sent',
                    'partial' => 'Partially Paid',
                    'overdue' => 'Overdue',
                    'draft' => 'Draft',
                    'cancelled' => 'Cancelled'
                ];
                $statusLabel = $statusLabels[$invoice->status] ?? ucfirst($invoice->status);
                $color = $invoice->status === 'paid' ? 'success' : ($invoice->status === 'overdue' ? 'danger' : 'warning');
                
                StudentNotification::createNotification(
                    $student->id,
                    'invoice_status_changed',
                    'Invoice Status Updated',
                    "Your invoice #{$invoice->invoice_number} status has been changed to: {$statusLabel}",
                    'solar:receipt-check-bold-duotone',
                    $color,
                    ['invoice_id' => $invoice->id, 'invoice_number' => $invoice->invoice_number, 'status' => $invoice->status]
                );
            }
        }

        return redirect()->route('admin.invoices.show', $invoice)
            ->with('success', 'Invoice updated successfully');
    }

    public function destroy(Invoice $invoice)
    {
        if ($invoice->paid_amount > 0) {
            return back()->withErrors(['error' => 'Cannot delete invoice with payments']);
        }

        $invoice->delete();
        return redirect()->route('admin.invoices.index')
            ->with('success', 'Invoice deleted successfully');
    }

    public function download(Invoice $invoice)
    {
        $invoice->load(['student', 'enrollment.course', 'enrollment.classSession.teacher', 'payments']);
        
        // Generate PDF
        $pdf = Pdf::loadView('admin.invoices.pdf', compact('invoice'));
        
        // Set paper size and orientation
        $pdf->setPaper('A4', 'portrait');
        
        // Download the PDF with invoice number as filename
        return $pdf->download('Invoice-' . $invoice->invoice_number . '.pdf');
    }

    public function recordPayment(Request $request, Invoice $invoice)
    {
        $validated = $request->validate([
            'paid_amount' => 'required|numeric|min:0|max:' . $invoice->remaining_amount,
            'payment_date' => 'required|date',
            'payment_method' => 'nullable|string',
            'notes' => 'nullable|string',
        ]);

        $oldStatus = $invoice->status;
        
        DB::transaction(function () use ($invoice, $validated) {
            $paidAmount = $validated['paid_amount'];
            $invoice->paid_amount += $paidAmount;
            $invoice->remaining_amount = $invoice->total_amount - $invoice->paid_amount;
            $invoice->updateStatus();
            $invoice->save();

            // Create payment record
            Payment::create([
                'student_id' => $invoice->student_id,
                'enrollment_id' => $invoice->enrollment_id,
                'invoice_number' => $invoice->invoice_number,
                'amount' => $paidAmount,
                'status' => 'paid',
                'paid_date' => $validated['payment_date'],
                'payment_method' => $validated['payment_method'] ?? 'cash',
                'notes' => $validated['notes'] ?? 'Payment for invoice ' . $invoice->invoice_number,
            ]);
        });

        // Notify student about payment
        $student = $invoice->student;
        if ($student) {
            $currencySymbol = CurrencyHelper::getCurrencySymbol($invoice->currency);
            $message = "Payment of {$currencySymbol}" . number_format($validated['paid_amount'], 2) . " has been recorded for invoice #{$invoice->invoice_number}";
            if ($invoice->status === 'paid') {
                $message .= ". Invoice is now fully paid.";
            } else {
                $message .= ". Remaining balance: {$currencySymbol}" . number_format($invoice->remaining_amount, 2);
            }
            
            StudentNotification::createNotification(
                $student->id,
                'payment_received',
                'Payment Recorded',
                $message,
                'solar:wallet-money-bold-duotone',
                'success',
                ['invoice_id' => $invoice->id, 'invoice_number' => $invoice->invoice_number, 'amount' => $validated['paid_amount']]
            );

            // Also notify if status changed
            if ($oldStatus !== $invoice->status) {
                $statusLabels = [
                    'paid' => 'Paid',
                    'partial' => 'Partially Paid',
                ];
                $statusLabel = $statusLabels[$invoice->status] ?? ucfirst($invoice->status);
                
                StudentNotification::createNotification(
                    $student->id,
                    'invoice_status_changed',
                    'Invoice Status Updated',
                    "Your invoice #{$invoice->invoice_number} status has been changed to: {$statusLabel}",
                    'solar:receipt-check-bold-duotone',
                    'success',
                    ['invoice_id' => $invoice->id, 'invoice_number' => $invoice->invoice_number, 'status' => $invoice->status]
                );
            }
        }

        return redirect()->route('admin.invoices.show', $invoice)
            ->with('success', 'Payment recorded successfully');
    }

    public function send(Invoice $invoice)
    {
        $invoice->update(['status' => 'sent']);
        
        // Notify student
        $student = $invoice->student;
        if ($student) {
            $currencySymbol = CurrencyHelper::getCurrencySymbol($invoice->currency);
            StudentNotification::createNotification(
                $student->id,
                'invoice_sent',
                'Invoice Sent',
                "Invoice #{$invoice->invoice_number} has been sent to you. Total amount: {$currencySymbol}" . number_format($invoice->total_amount, 2),
                'solar:letter-bold-duotone',
                'info',
                ['invoice_id' => $invoice->id, 'invoice_number' => $invoice->invoice_number]
            );
        }
        
        return back()->with('success', 'Invoice marked as sent');
    }
}
