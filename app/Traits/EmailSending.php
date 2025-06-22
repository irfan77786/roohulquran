<?php

namespace App\Traits;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Http;
use Exception;
use Illuminate\Support\Facades\Log;

trait EmailSending
{
    /**
     * @throws Exception
     */

     public function sendEmail(string $to, string $subject, string $htmlContent): void
     {
 
        $apiKey = config('brevo.api_key');
         $response = Http::withHeaders([
            'api-key' => $apiKey,
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ])->post('https://api.brevo.com/v3/smtp/email', [
            'sender' => [
                'name' => 'roohulquran',
                'email' => 'hafizirfan11123@gmail.com',
            ],
            'to' => [
                ['email' => $to],
            ],
            'subject' => $subject,
            'htmlContent' => $htmlContent,
        ]);
        
        // Log or dd the response
        if ($response->failed()) {
            Log::error('Brevo Email Error', [
                'to' => $to,
                'subject' => $subject,
                'response' => $response->body()
            ]);
        
        }
     }
}
