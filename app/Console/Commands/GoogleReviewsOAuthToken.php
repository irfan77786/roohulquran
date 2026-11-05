<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class GoogleReviewsOAuthToken extends Command
{
    protected $signature = 'google-reviews:oauth
                            {--code= : Authorization code from Google OAuth redirect}
                            {--redirect=http://localhost : Redirect URI used in OAuth client}';

    protected $description = 'Print OAuth URL or exchange an auth code for a Google Business Profile refresh token';

    private const SCOPE = 'https://www.googleapis.com/auth/business.manage';

    public function handle(): int
    {
        $clientId = config('google-reviews.business_profile.client_id');
        $clientSecret = config('google-reviews.business_profile.client_secret');
        $redirect = $this->option('redirect');

        if (! $clientId || ! $clientSecret) {
            $this->error('Set GOOGLE_BUSINESS_PROFILE_CLIENT_ID and GOOGLE_BUSINESS_PROFILE_CLIENT_SECRET first.');

            return self::FAILURE;
        }

        $code = $this->option('code');

        if (! $code) {
            $url = 'https://accounts.google.com/o/oauth2/v2/auth?'.http_build_query([
                'client_id' => $clientId,
                'redirect_uri' => $redirect,
                'response_type' => 'code',
                'scope' => self::SCOPE,
                'access_type' => 'offline',
                'prompt' => 'consent',
            ]);

            $this->info('1) Add this redirect URI in Google Cloud Console OAuth client:');
            $this->line('   '.$redirect);
            $this->newLine();
            $this->info('2) Open this URL while logged into the Google account that owns your Business Profile:');
            $this->line($url);
            $this->newLine();
            $this->info('3) After consent, copy the ?code= value from the browser URL, then run:');
            $this->line('   php artisan google-reviews:oauth --code=PASTE_CODE --redirect='.$redirect);

            return self::SUCCESS;
        }

        $response = Http::asForm()->post('https://oauth2.googleapis.com/token', [
            'code' => $code,
            'client_id' => $clientId,
            'client_secret' => $clientSecret,
            'redirect_uri' => $redirect,
            'grant_type' => 'authorization_code',
        ]);

        if (! $response->successful()) {
            $this->error('Token exchange failed: '.$response->body());

            return self::FAILURE;
        }

        $refresh = $response->json('refresh_token');
        if (! $refresh) {
            $this->error('No refresh_token returned. Re-run with prompt=consent (this command already uses it), or revoke app access and try again.');
            $this->line($response->body());

            return self::FAILURE;
        }

        $this->info('Add this to your .env:');
        $this->line('GOOGLE_BUSINESS_PROFILE_REFRESH_TOKEN='.$refresh);
        $this->newLine();
        $this->info('Then run: php artisan google-reviews:discover');

        return self::SUCCESS;
    }
}
