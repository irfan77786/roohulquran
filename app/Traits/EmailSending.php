<?php

namespace App\Traits;

use Exception;
use Illuminate\Support\Facades\Mail;

trait EmailSending
{
    /**
     * @throws Exception
     */
    public function sendEmail(string $to, string $subject, string $htmlContent): void
    {
        // Uses Laravel's Mail facade, which will use your Gmail SMTP
        Mail::send([], [], function ($message) use ($to, $subject, $htmlContent) {
            $message->to($to)
                ->subject($subject)
                ->html($htmlContent);
        });
    }
}
