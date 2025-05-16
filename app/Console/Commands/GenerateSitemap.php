<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemap:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
public function handle()
{
   $now = Carbon::now();
    $baseUrl = rtrim(env('APP_URL'), '/');

    $sitemap = Sitemap::create()
        ->add(Url::create("{$baseUrl}/")->setLastModificationDate($now))
        ->add(Url::create("{$baseUrl}/about")->setLastModificationDate($now))
        ->add(Url::create("{$baseUrl}/courses")->setLastModificationDate($now))
        ->add(Url::create("{$baseUrl}/pricing")->setLastModificationDate($now))
        ->add(Url::create("{$baseUrl}/contact-us")->setLastModificationDate($now))

        // Course pages
        ->add(Url::create("{$baseUrl}/quran-reading-with-tajweed")->setLastModificationDate($now))
        ->add(Url::create("{$baseUrl}/qaida-by-roohulquran")->setLastModificationDate($now))
        ->add(Url::create("{$baseUrl}/tafseer-course-online")->setLastModificationDate($now))
        ->add(Url::create("{$baseUrl}/memorize-quran-online")->setLastModificationDate($now));

    $sitemap->writeToFile(public_path('sitemap.xml'));

    $this->info('✅ Sitemap generated using base URL: ' . $baseUrl);
    $this->info('✅ Sitemap generated successfully.');
}

}
