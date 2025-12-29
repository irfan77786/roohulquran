<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice {{ $invoice->invoice_number }}</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'DejaVu Sans', Arial, sans-serif;
            color: #333;
            line-height: 1.4;
            font-size: 11px;
        }
        
        .invoice-container {
            max-width: 210mm;
            margin: 0 auto;
            padding: 15mm;
            background: #fff;
        }
        
        .header {
            display: table;
            width: 100%;
            margin-bottom: 15px;
            border-bottom: 3px solid #5D87FF;
            padding-bottom: 10px;
        }
        
        .header-left {
            display: table-cell;
            width: 60%;
            vertical-align: top;
        }
        
        .header-right {
            display: table-cell;
            width: 40%;
            text-align: right;
            vertical-align: top;
        }
        
        .logo {
            max-width: 120px;
            max-height: 60px;
            margin-bottom: 8px;
        }
        
        .company-name {
            font-size: 20px;
            font-weight: bold;
            color: #5D87FF;
            margin-bottom: 3px;
        }
        
        .company-info {
            font-size: 9px;
            color: #666;
            line-height: 1.3;
        }
        
        .invoice-title {
            font-size: 24px;
            font-weight: bold;
            color: #5D87FF;
            margin-bottom: 8px;
        }
        
        .invoice-details {
            font-size: 10px;
            line-height: 1.5;
        }
        
        .status-badge {
            display: inline-block;
            padding: 4px 10px;
            border-radius: 3px;
            font-size: 9px;
            font-weight: bold;
            text-transform: uppercase;
            margin-top: 5px;
        }
        
        .status-paid { background: #13DEB9; color: #fff; }
        .status-pending { background: #FFAE1F; color: #fff; }
        .status-overdue { background: #FA896B; color: #fff; }
        .status-partial { background: #539BFF; color: #fff; }
        .status-sent { background: #5D87FF; color: #fff; }
        .status-draft { background: #999; color: #fff; }
        
        .content-section {
            margin-bottom: 12px;
        }
        
        .two-columns {
            display: table;
            width: 100%;
            margin-bottom: 12px;
        }
        
        .column {
            display: table-cell;
            width: 50%;
            vertical-align: top;
            padding-right: 15px;
        }
        
        .column:last-child {
            padding-right: 0;
        }
        
        .section-title {
            font-size: 11px;
            font-weight: bold;
            color: #333;
            margin-bottom: 5px;
            padding-bottom: 3px;
            border-bottom: 1px solid #ddd;
        }
        
        .section-content {
            font-size: 10px;
            line-height: 1.4;
            color: #555;
        }
        
        .items-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 10px;
            font-size: 10px;
        }
        
        .items-table thead {
            background: #5D87FF;
            color: #fff;
        }
        
        .items-table th {
            padding: 8px 6px;
            text-align: left;
            font-weight: bold;
            font-size: 10px;
        }
        
        .items-table th.text-center {
            text-align: center;
        }
        
        .items-table th.text-right {
            text-align: right;
        }
        
        .items-table td {
            padding: 6px;
            border-bottom: 1px solid #e0e0e0;
        }
        
        .items-table td.text-center {
            text-align: center;
        }
        
        .items-table td.text-right {
            text-align: right;
        }
        
        .totals-section {
            margin-top: 10px;
            margin-left: auto;
            width: 250px;
        }
        
        .totals-table {
            width: 100%;
            border-collapse: collapse;
        }
        
        .totals-table td {
            padding: 4px 8px;
            font-size: 10px;
        }
        
        .totals-table td:first-child {
            text-align: right;
            color: #666;
        }
        
        .totals-table td:last-child {
            text-align: right;
            font-weight: 600;
        }
        
        .total-row {
            background: #5D87FF;
            color: #fff;
            font-size: 12px;
            font-weight: bold;
        }
        
        .total-row td {
            padding: 8px;
        }
        
        .payment-info {
            margin-top: 12px;
            padding: 8px;
            background: #f8f9fa;
            border-left: 3px solid #5D87FF;
            font-size: 9px;
        }
        
        .footer {
            margin-top: 15px;
            padding-top: 8px;
            border-top: 1px solid #ddd;
            text-align: center;
            color: #666;
            font-size: 8px;
        }
    </style>
</head>
<body>
    @php
        $currencySymbol = \App\Helpers\CurrencyHelper::getCurrencySymbol($invoice->currency ?? 'USD');
        
        // Get logo as base64
        $logoPath = public_path('assets/img/logo.svg');
        if (!file_exists($logoPath)) {
            $logoPath = public_path('assets/img/logo.png');
        }
        $logoDataUri = '';
        if (file_exists($logoPath)) {
            $logoExtension = pathinfo($logoPath, PATHINFO_EXTENSION);
            $logoContent = file_get_contents($logoPath);
            $logoBase64 = base64_encode($logoContent);
            $logoMime = $logoExtension === 'svg' ? 'image/svg+xml' : 'image/png';
            $logoDataUri = 'data:' . $logoMime . ';base64,' . $logoBase64;
        }
    @endphp
    
    <div class="invoice-container">
        <!-- Header -->
        <div class="header">
            <div class="header-left">
                @if($logoDataUri)
                    <img src="{{ $logoDataUri }}" alt="Logo" class="logo">
                @endif
                <div class="company-name">Roohul Quran Academy</div>
                <div class="company-info">
                    Online Quran Learning Platform<br>
                    Email: info@roohulquranacademy.com | Phone: +92-334-4066429
                </div>
            </div>
            <div class="header-right">
                <div class="invoice-title">INVOICE</div>
                <div class="invoice-details">
                    <strong>Invoice #:</strong> {{ $invoice->invoice_number }}<br>
                    <strong>Date:</strong> {{ $invoice->invoice_date->format('M d, Y') }}<br>
                    <strong>Due Date:</strong> {{ $invoice->due_date->format('M d, Y') }}<br>
                    <span class="status-badge status-{{ $invoice->status }}">
                        {{ strtoupper($invoice->status) }}
                    </span>
                </div>
            </div>
        </div>

        <!-- Bill To & Invoice Details -->
        <div class="two-columns">
            <div class="column">
                <div class="section-title">Bill To</div>
                <div class="section-content">
                    @if($invoice->bill_to)
                        {!! nl2br(e($invoice->bill_to)) !!}
                    @else
                        @if($invoice->student->guardian_name)
                            <strong>{{ $invoice->student->guardian_name }}</strong><br>
                            @if($invoice->student->guardian_phone)
                                {{ $invoice->student->guardian_phone }}<br>
                            @endif
                        @endif
                        <strong>Student: {{ $invoice->student->name }}</strong><br>
                        @if($invoice->student->email)
                            {{ $invoice->student->email }}<br>
                        @endif
                        @if($invoice->student->phone)
                            {{ $invoice->student->phone }}<br>
                        @endif
                        @if($invoice->student->country)
                            {{ $invoice->student->city ?? '' }}{{ $invoice->student->city && $invoice->student->country ? ', ' : '' }}{{ $invoice->student->country }}
                        @endif
                    @endif
                </div>
            </div>
            <div class="column">
                <div class="section-title">Invoice Details</div>
                <div class="section-content">
                    <strong>Title:</strong> {{ $invoice->title }}<br>
                    @if($invoice->enrollment && $invoice->enrollment->course)
                        <strong>Course:</strong> {{ $invoice->enrollment->course->name }}<br>
                    @endif
                    @if($invoice->start_date && $invoice->end_date)
                        <strong>Period:</strong> {{ $invoice->start_date->format('M d, Y') }} - {{ $invoice->end_date->format('M d, Y') }}
                    @endif
                </div>
            </div>
        </div>

        @if($invoice->description)
        <div class="content-section" style="padding: 6px; background: #f8f9fa; border-radius: 3px;">
            <div class="section-content"><strong>Description:</strong> {{ $invoice->description }}</div>
        </div>
        @endif

        <!-- Items Table -->
        <table class="items-table">
            <thead>
                <tr>
                    <th>Subject</th>
                    <th class="text-center">Students</th>
                    <th class="text-right">Total Fee</th>
                </tr>
            </thead>
            <tbody>
                @if($invoice->items && count($invoice->items) > 0)
                    @foreach($invoice->items as $item)
                    <tr>
                        <td>{{ $item['description'] ?? 'N/A' }}</td>
                        <td class="text-center">{{ $item['quantity'] ?? 1 }}</td>
                        <td class="text-right">{{ $currencySymbol }}{{ number_format($item['price'] ?? 0, 2) }}</td>
                    </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="3" class="text-center" style="padding: 15px; color: #999;">No items specified</td>
                    </tr>
                @endif
            </tbody>
        </table>

        <!-- Totals -->
        <div class="totals-section">
            <table class="totals-table">
                <tr>
                    <td>Subtotal:</td>
                    <td>{{ $currencySymbol }}{{ number_format($invoice->subtotal, 2) }}</td>
                </tr>
                @if($invoice->tax > 0)
                <tr>
                    <td>Tax:</td>
                    <td>{{ $currencySymbol }}{{ number_format($invoice->tax, 2) }}</td>
                </tr>
                @endif
                @if($invoice->discount > 0)
                <tr>
                    <td>Discount:</td>
                    <td style="color: #FA896B;">-{{ $currencySymbol }}{{ number_format($invoice->discount, 2) }}</td>
                </tr>
                @endif
                <tr class="total-row">
                    <td>Total Amount:</td>
                    <td>{{ $currencySymbol }}{{ number_format($invoice->total_amount, 2) }}</td>
                </tr>
                <tr>
                    <td>Paid Amount:</td>
                    <td style="color: #13DEB9;">{{ $currencySymbol }}{{ number_format($invoice->paid_amount, 2) }}</td>
                </tr>
                <tr>
                    <td><strong>Remaining:</strong></td>
                    <td><strong style="color: {{ $invoice->remaining_amount > 0 ? '#FFAE1F' : '#13DEB9' }};">{{ $currencySymbol }}{{ number_format($invoice->remaining_amount, 2) }}</strong></td>
                </tr>
            </table>
        </div>

        <!-- Payment History -->
        @if($invoice->payments->count() > 0)
        <div class="payment-info">
            <strong>Payment History:</strong><br>
            @foreach($invoice->payments as $payment)
                {{ $currencySymbol }}{{ number_format($payment->amount, 2) }} paid on {{ $payment->paid_date ? $payment->paid_date->format('M d, Y') : 'N/A' }}
                @if($payment->payment_method)
                    via {{ ucfirst(str_replace('_', ' ', $payment->payment_method)) }}
                @endif
                @if(!$loop->last) | @endif
            @endforeach
        </div>
        @endif

        @if($invoice->remaining_amount > 0)
        <div class="payment-info" style="background: #fff3cd; border-left-color: #FFAE1F;">
            <strong>Payment Due:</strong> Please make payment of <strong>{{ $currencySymbol }}{{ number_format($invoice->remaining_amount, 2) }}</strong> by {{ $invoice->due_date->format('F d, Y') }}
        </div>
        @endif

        <!-- Footer -->
        <div class="footer">
            Thank you for choosing Roohul Quran Academy!<br>
            This is a computer-generated invoice. No signature required.<br>
            Generated on {{ now()->format('M d, Y h:i A') }}
        </div>
    </div>
</body>
</html>
