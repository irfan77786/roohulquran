<?php

namespace App\Jobs;

use App\Mail\TrialClassConfirmationMail;
use App\Services\BrevoMailService;
use App\Traits\EmailSending;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendTrialClassEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels, EmailSending;

    protected $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function handle(): void
    {
        // Send confirmation email to user
        if (!empty($this->data['email'])) {
            $this->sendEmail(
                to: $this->data['email'],
                subject: 'Trial Class Confirmation',
                htmlContent: view('emails.trial_confirmation_html', $this->data)->render()
            );
        }
    
        // Send query alert to admin
        $this->sendEmail(
            to: 'hafizirfan11123@gmail.com',
            subject: 'New Trial Class Query',
            htmlContent: view('emails.trial_query_admin', $this->data)->render()
        );
    }
}
