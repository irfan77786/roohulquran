<?php

namespace App\Console\Commands;

use App\Services\GoogleReviewsService;
use Illuminate\Console\Command;

class DiscoverGoogleBusinessLocations extends Command
{
    protected $signature = 'google-reviews:discover';

    protected $description = 'List Google Business Profile accounts and locations for GOOGLE_BUSINESS_PROFILE_LOCATION';

    public function handle(GoogleReviewsService $service): int
    {
        if (! $service->isConfigured()) {
            $this->error('Business Profile OAuth is not configured in .env');
            $this->line('Set GOOGLE_BUSINESS_PROFILE_CLIENT_ID, CLIENT_SECRET, and REFRESH_TOKEN');

            return self::FAILURE;
        }

        try {
            $rows = $service->discoverAccountsAndLocations();
        } catch (\Throwable $e) {
            $this->error($e->getMessage());

            return self::FAILURE;
        }

        if (empty($rows)) {
            $this->warn('No accounts found for this OAuth user.');

            return self::FAILURE;
        }

        foreach ($rows as $account) {
            $this->info('Account: '.$account['account'].' ('.$account['account_name'].')');

            if (empty($account['locations'])) {
                $this->line('  (no locations)');
                continue;
            }

            foreach ($account['locations'] as $location) {
                $path = $location['name'];
                // Business Information API returns "locations/{id}" — reviews need full path
                if ($path && ! str_starts_with($path, 'accounts/')) {
                    $path = $account['account'].'/'.$path;
                }

                $this->line('  Location: '.($location['title'] ?? 'Untitled'));
                $this->line('  Set: GOOGLE_BUSINESS_PROFILE_LOCATION='.$path);
                $this->newLine();
            }
        }

        return self::SUCCESS;
    }
}
