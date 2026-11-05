<?php

namespace App\Console\Commands;

use App\Services\BlogSitemapService;
use Illuminate\Console\Command;

class GenerateBlogSitemap extends Command
{
    protected $signature = 'sitemap:generate-blogs';

    protected $description = 'Generate a separate sitemap XML for published blog posts';

    public function handle(BlogSitemapService $sitemap): int
    {
        $sitemap->regenerate();
        $this->info('Blog sitemap written to public/' . BlogSitemapService::FILENAME);

        return self::SUCCESS;
    }
}
