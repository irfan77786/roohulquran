<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = [
        'invoice_number',
        'student_id',
        'enrollment_id',
        'title',
        'invoice_date',
        'due_date',
        'start_date',
        'end_date',
        'subtotal',
        'tax',
        'discount',
        'total_amount',
        'paid_amount',
        'remaining_amount',
        'status',
        'invoice_type',
        'description',
        'bill_to',
        'notes',
        'items',
        'currency',
    ];

    protected $casts = [
        'invoice_date' => 'date',
        'due_date' => 'date',
        'start_date' => 'date',
        'end_date' => 'date',
        'subtotal' => 'decimal:2',
        'tax' => 'decimal:2',
        'discount' => 'decimal:2',
        'total_amount' => 'decimal:2',
        'paid_amount' => 'decimal:2',
        'remaining_amount' => 'decimal:2',
        'items' => 'array',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($invoice) {
            if (empty($invoice->invoice_number)) {
                $invoice->invoice_number = static::generateInvoiceNumber();
            }
        });
    }

    public static function generateInvoiceNumber()
    {
        $year = date('Y');
        $month = date('m');
        $lastInvoice = static::whereYear('created_at', $year)
            ->whereMonth('created_at', $month)
            ->orderBy('id', 'desc')
            ->first();

        $number = $lastInvoice ? (int) substr($lastInvoice->invoice_number, -4) + 1 : 1;
        return 'INV-' . $year . $month . '-' . str_pad($number, 4, '0', STR_PAD_LEFT);
    }

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function enrollment()
    {
        return $this->belongsTo(Enrollment::class);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class, 'invoice_number', 'invoice_number');
    }

    public function updateStatus()
    {
        if ($this->paid_amount >= $this->total_amount) {
            $this->status = 'paid';
        } elseif ($this->paid_amount > 0) {
            $this->status = 'partial';
        } elseif ($this->due_date < now() && $this->status !== 'cancelled') {
            $this->status = 'overdue';
        }

        $this->remaining_amount = $this->total_amount - $this->paid_amount;
        $this->save();
    }

    public function isOverdue()
    {
        return $this->due_date < now() && $this->status !== 'paid' && $this->status !== 'cancelled';
    }
}
