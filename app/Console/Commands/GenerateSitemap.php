<?php

namespace App\Console\Commands;

use App\Models\Blog;
use App\Support\UkLocations;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class GenerateSitemap extends Command
{
    protected $signature = 'sitemap:generate';

    protected $description = 'Write public/sitemap.xml with core pages, blogs, and main UK city URLs';

    public function handle()
    {
        $now = Carbon::now();
        $baseUrl = rtrim((string) config('app.sitemap_base_url', 'https://roohulquranacademy.com'), '/');

        $sitemap = Sitemap::create()
            ->add(Url::create("{$baseUrl}/")->setLastModificationDate($now))
            ->add(Url::create("{$baseUrl}/about")->setLastModificationDate($now))
            ->add(Url::create("{$baseUrl}/pricing")->setLastModificationDate($now))
            ->add(Url::create("{$baseUrl}/contact-us")->setLastModificationDate($now))
            ->add(Url::create("{$baseUrl}/teachers")->setLastModificationDate($now))
            ->add(Url::create("{$baseUrl}/quran-reading-with-tajweed")->setLastModificationDate($now))
            ->add(Url::create("{$baseUrl}/qaida-by-roohulquran")->setLastModificationDate($now))
            ->add(Url::create("{$baseUrl}/tafseer-course-online")->setLastModificationDate($now))
            ->add(Url::create("{$baseUrl}/memorize-quran-online")->setLastModificationDate($now))
            ->add(Url::create("{$baseUrl}/beginner-quran-classes")->setLastModificationDate($now))
            ->add(Url::create("{$baseUrl}/kids-quran-classes")->setLastModificationDate($now))
            ->add(Url::create("{$baseUrl}/blogs")->setLastModificationDate($now));

        foreach (UkLocations::pages() as $page) {
            $sitemap->add(Url::create($baseUrl . $page['path'])
                ->setLastModificationDate($now)
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
                ->setPriority(0.6));
        }

        Blog::query()
            ->where('status', true)
            ->orderByDesc('updated_at')
            ->get(['slug', 'updated_at'])
            ->each(function (Blog $blog) use ($sitemap, $baseUrl) {
                $lastmod = $blog->updated_at ?? Carbon::now();
                $sitemap->add(Url::create("{$baseUrl}/blogs/" . ltrim((string) $blog->slug, '/'))
                    ->setLastModificationDate($lastmod)
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
                    ->setPriority(0.6));
            });

        $sitemap->writeToFile(public_path('sitemap.xml'));

        $this->info('Sitemap generated using base URL: ' . $baseUrl);
        $this->info('Sitemap generated successfully.');

        return 0;
    }
}
