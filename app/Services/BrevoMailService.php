<?php
// app/Services/BrevoMailService.php
namespace App\Services;

use SendinBlue\Client\Api\TransactionalEmailsApi;
use SendinBlue\Client\Configuration;
use SendinBlue\Client\Model\SendSmtpEmail;
use GuzzleHttp\Client;

class BrevoMailService
{
    protected $apiInstance;

    public function __construct()
    {
        $config = Configuration::getDefaultConfiguration()->setApiKey('api-key', config('services.brevo.key'));
        $this->apiInstance = new TransactionalEmailsApi(new Client(), $config);
    }

    public function send(array $to, string $subject, string $htmlContent)
    {
        $email = new SendSmtpEmail([
            'subject' => $subject,
            'sender' => ['name' => 'Roohul Quran', 'email' => 'no-reply@roohulquran.com'],
            'to' => $to,
            'htmlContent' => $htmlContent,
        ]);

        return $this->apiInstance->sendTransacEmail($email);
    }
}
