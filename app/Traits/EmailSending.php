<?php

namespace App\Traits;

use App\Services\BrevoMailService;
use Exception;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

trait EmailSending
{
    /**
     * @throws Exception
     */
    public function sendEmail(string $to, string $subject, string $htmlContent): void
    {
        if (config('services.brevo.key')) {
            try {
                app(BrevoMailService::class)->send($to, $subject, $htmlContent);
                return;
            } catch (\Throwable $e) {
                Log::warning('Brevo email failed, falling back to SMTP.', [
                    'error' => $e->getMessage(),
                    'to' => $to,
                ]);
            }
        }

        Mail::send([], [], function ($message) use ($to, $subject, $htmlContent) {
            $message->to($to)
                ->subject($subject)
                ->html($htmlContent);
        });
    }
}
