<?php

namespace App\Services;

use SendinBlue\Client\Api\TransactionalEmailsApi;
use SendinBlue\Client\Configuration;
use SendinBlue\Client\Model\SendSmtpEmail;
use GuzzleHttp\Client;

class BrevoMailService
{
    protected TransactionalEmailsApi $apiInstance;

    public function __construct()
    {
        $config = Configuration::getDefaultConfiguration()->setApiKey('api-key', config('services.brevo.key'));
        $this->apiInstance = new TransactionalEmailsApi(new Client(), $config);
    }

    public function send(string $to, string $subject, string $htmlContent)
    {
        $email = new SendSmtpEmail([
            'subject' => $subject,
            'sender' => [
                'name' => config('services.brevo.sender_name'),
                'email' => config('services.brevo.sender_email'),
            ],
            'to' => [['email' => $to]],
            'htmlContent' => $htmlContent,
        ]);

        return $this->apiInstance->sendTransacEmail($email);
    }
}
