<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class GenerateSitemap extends Command
{
    protected $signature = 'sitemap:generate';

    protected $description = 'Write public/sitemap.xml with core pages only (blogs live in sitemap-blogs.xml)';

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
            ->add(Url::create("{$baseUrl}/faq")->setLastModificationDate($now))
            ->add(Url::create("{$baseUrl}/quran-reading-with-tajweed")->setLastModificationDate($now))
            ->add(Url::create("{$baseUrl}/qaida-by-roohulquran")->setLastModificationDate($now))
            ->add(Url::create("{$baseUrl}/tafseer-course-online")->setLastModificationDate($now))
            ->add(Url::create("{$baseUrl}/memorize-quran-online")->setLastModificationDate($now))
            ->add(Url::create("{$baseUrl}/beginner-quran-classes")->setLastModificationDate($now))
            ->add(Url::create("{$baseUrl}/kids-quran-classes")->setLastModificationDate($now))
            ->add(Url::create("{$baseUrl}/online-ijazah-course")->setLastModificationDate($now));

        $sitemap->writeToFile(public_path('sitemap.xml'));

        $this->info('Sitemap generated using base URL: ' . $baseUrl);
        $this->info('Sitemap generated successfully.');

        return 0;
    }
}
