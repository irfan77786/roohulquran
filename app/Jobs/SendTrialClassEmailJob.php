<?php

namespace App\Jobs;

use App\Traits\EmailSending;
use Illuminate\Bus\Queueable;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\SerializesModels;

class SendTrialClassEmailJob
{
    use Dispatchable, Queueable, SerializesModels, EmailSending;

    protected $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function handle(): void
    {
        $this->sendEmail(
            to: 'hafizirfan8078@gmail.com',
            subject: 'New Trial Class Query',
            htmlContent: view('emails.trial_query_admin', $this->data)->render()
        );
    }
}
