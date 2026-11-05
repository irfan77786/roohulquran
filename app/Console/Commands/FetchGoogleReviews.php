<?php

namespace App\Console\Commands;

use App\Services\GoogleReviewsService;
use Illuminate\Console\Command;

class FetchGoogleReviews extends Command
{
    protected $signature = 'google-reviews:fetch {--fresh : Clear cache and refetch}';

    protected $description = 'Fetch Google reviews and display a short summary';

    public function handle(GoogleReviewsService $service): int
    {
        if (! $service->isConfigured()) {
            $this->warn('API credentials missing — returning fallback testimonials.');
        }

        try {
            $data = $this->option('fresh') ? $service->refresh() : $service->getReviews();
        } catch (\Throwable $e) {
            $this->error($e->getMessage());

            return self::FAILURE;
        }

        $this->info('Source: '.($data['source'] ?? 'unknown'));
        $this->info('Rating: '.($data['rating'] ?? 'n/a').' ('.$data['total'].' total)');
        $this->info('Showing '.count($data['reviews']).' review(s) on site');
        $this->newLine();

        foreach ($data['reviews'] as $review) {
            $stars = str_repeat('★', (int) $review['rating']).str_repeat('☆', 5 - (int) $review['rating']);
            $this->line($stars.'  '.$review['author']);
            $this->line('  '.(\Illuminate\Support\Str::limit($review['text'], 120)));
            $this->newLine();
        }

        return self::SUCCESS;
    }
}
