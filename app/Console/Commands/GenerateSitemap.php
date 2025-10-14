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
            ->add(Url::create("{$baseUrl}/teachers")->setLastModificationDate($now))

            // Course pages
            ->add(Url::create("{$baseUrl}/quran-reading-with-tajweed")->setLastModificationDate($now))
            ->add(Url::create("{$baseUrl}/qaida-by-roohulquran")->setLastModificationDate($now))
            ->add(Url::create("{$baseUrl}/tafseer-course-online")->setLastModificationDate($now))
            ->add(Url::create("{$baseUrl}/memorize-quran-online")->setLastModificationDate($now))
            ->add(Url::create("{$baseUrl}/beginner-quran-classes")->setLastModificationDate($now))
            ->add(Url::create("{$baseUrl}/kids-quran-classes")->setLastModificationDate($now))

            // Blog pages
            ->add(Url::create("{$baseUrl}/blogs")->setLastModificationDate($now))

            // City-specific routes - New York
            ->add(Url::create("{$baseUrl}/new-york-city/quran-academy-new-york-city-new-york")->setLastModificationDate($now))
            ->add(Url::create("{$baseUrl}/buffalo/quran-academy-buffalo-new-york")->setLastModificationDate($now))
            ->add(Url::create("{$baseUrl}/rochester/quran-academy-rochester-new-york")->setLastModificationDate($now))
            ->add(Url::create("{$baseUrl}/albany/quran-academy-albany-new-york")->setLastModificationDate($now))
            ->add(Url::create("{$baseUrl}/syracuse/quran-academy-syracuse-new-york")->setLastModificationDate($now))

            // City-specific routes - New Jersey
            ->add(Url::create("{$baseUrl}/jersey-city/quran-academy-jersey-city-new-jersey")->setLastModificationDate($now))
            ->add(Url::create("{$baseUrl}/paterson/quran-academy-paterson-new-jersey")->setLastModificationDate($now))
            ->add(Url::create("{$baseUrl}/newark/quran-academy-newark-new-jersey")->setLastModificationDate($now))
            ->add(Url::create("{$baseUrl}/clifton/quran-academy-clifton-new-jersey")->setLastModificationDate($now))
            ->add(Url::create("{$baseUrl}/edison/quran-academy-edison-new-jersey")->setLastModificationDate($now))

            // City-specific routes - Michigan
            ->add(Url::create("{$baseUrl}/dearborn/quran-academy-dearborn-michigan")->setLastModificationDate($now))
            ->add(Url::create("{$baseUrl}/detroit/quran-academy-detroit-michigan")->setLastModificationDate($now))
            ->add(Url::create("{$baseUrl}/ann-arbor/quran-academy-ann-arbor-michigan")->setLastModificationDate($now))
            ->add(Url::create("{$baseUrl}/hamtramck/quran-academy-hamtramck-michigan")->setLastModificationDate($now))
            ->add(Url::create("{$baseUrl}/warren/quran-academy-warren-michigan")->setLastModificationDate($now))

            // City-specific routes - Illinois
            ->add(Url::create("{$baseUrl}/chicago/quran-academy-chicago-illinois")->setLastModificationDate($now))
            ->add(Url::create("{$baseUrl}/bridgeview/quran-academy-bridgeview-illinois")->setLastModificationDate($now))
            ->add(Url::create("{$baseUrl}/skokie/quran-academy-skokie-illinois")->setLastModificationDate($now))
            ->add(Url::create("{$baseUrl}/naperville/quran-academy-naperville-illinois")->setLastModificationDate($now))
            ->add(Url::create("{$baseUrl}/peoria/quran-academy-peoria-illinois")->setLastModificationDate($now))

            // City-specific routes - Texas
            ->add(Url::create("{$baseUrl}/houston/quran-academy-houston-texas")->setLastModificationDate($now))
            ->add(Url::create("{$baseUrl}/dallas/quran-academy-dallas-texas")->setLastModificationDate($now))
            ->add(Url::create("{$baseUrl}/austin/quran-academy-austin-texas")->setLastModificationDate($now))
            ->add(Url::create("{$baseUrl}/san-antonio/quran-academy-san-antonio-texas")->setLastModificationDate($now))
            ->add(Url::create("{$baseUrl}/plano/quran-academy-plano-texas")->setLastModificationDate($now))

            // City-specific routes - California
            ->add(Url::create("{$baseUrl}/los-angeles/quran-academy-los-angeles-california")->setLastModificationDate($now))
            ->add(Url::create("{$baseUrl}/san-francisco/quran-academy-san-francisco-california")->setLastModificationDate($now))
            ->add(Url::create("{$baseUrl}/sacramento/quran-academy-sacramento-california")->setLastModificationDate($now))
            ->add(Url::create("{$baseUrl}/san-diego/quran-academy-san-diego-california")->setLastModificationDate($now))
            ->add(Url::create("{$baseUrl}/fremont/quran-academy-fremont-california")->setLastModificationDate($now))

            // City-specific routes - Minnesota
            ->add(Url::create("{$baseUrl}/minneapolis/quran-academy-minneapolis-minnesota")->setLastModificationDate($now))
            ->add(Url::create("{$baseUrl}/st-paul/quran-academy-st-paul-minnesota")->setLastModificationDate($now))
            ->add(Url::create("{$baseUrl}/bloomington/quran-academy-bloomington-minnesota")->setLastModificationDate($now))
            ->add(Url::create("{$baseUrl}/rochester/quran-academy-rochester-minnesota")->setLastModificationDate($now))
            ->add(Url::create("{$baseUrl}/st-cloud/quran-academy-st-cloud-minnesota")->setLastModificationDate($now))

            // City-specific routes - Ohio
            ->add(Url::create("{$baseUrl}/cleveland/quran-academy-cleveland-ohio")->setLastModificationDate($now))
            ->add(Url::create("{$baseUrl}/columbus/quran-academy-columbus-ohio")->setLastModificationDate($now))
            ->add(Url::create("{$baseUrl}/cincinnati/quran-academy-cincinnati-ohio")->setLastModificationDate($now))
            ->add(Url::create("{$baseUrl}/toledo/quran-academy-toledo-ohio")->setLastModificationDate($now))
            ->add(Url::create("{$baseUrl}/dayton/quran-academy-dayton-ohio")->setLastModificationDate($now))

            // City-specific routes - Virginia
            ->add(Url::create("{$baseUrl}/fairfax/quran-academy-fairfax-virginia")->setLastModificationDate($now))
            ->add(Url::create("{$baseUrl}/alexandria/quran-academy-alexandria-virginia")->setLastModificationDate($now))
            ->add(Url::create("{$baseUrl}/arlington/quran-academy-arlington-virginia")->setLastModificationDate($now))
            ->add(Url::create("{$baseUrl}/richmond/quran-academy-richmond-virginia")->setLastModificationDate($now))
            ->add(Url::create("{$baseUrl}/norfolk/quran-academy-norfolk-virginia")->setLastModificationDate($now))

            // City-specific routes - Maryland
            ->add(Url::create("{$baseUrl}/baltimore/quran-academy-baltimore-maryland")->setLastModificationDate($now))
            ->add(Url::create("{$baseUrl}/silver-spring/quran-academy-silver-spring-maryland")->setLastModificationDate($now))
            ->add(Url::create("{$baseUrl}/rockville/quran-academy-rockville-maryland")->setLastModificationDate($now))
            ->add(Url::create("{$baseUrl}/college-park/quran-academy-college-park-maryland")->setLastModificationDate($now))
            ->add(Url::create("{$baseUrl}/gaithersburg/quran-academy-gaithersburg-maryland")->setLastModificationDate($now))

            // City-specific routes - Pennsylvania
            ->add(Url::create("{$baseUrl}/philadelphia/quran-academy-philadelphia-pennsylvania")->setLastModificationDate($now))
            ->add(Url::create("{$baseUrl}/pittsburgh/quran-academy-pittsburgh-pennsylvania")->setLastModificationDate($now))

            // City-specific routes - Georgia
            ->add(Url::create("{$baseUrl}/atlanta/quran-academy-atlanta-georgia")->setLastModificationDate($now))

            // City-specific routes - Florida
            ->add(Url::create("{$baseUrl}/miami/quran-academy-miami-florida")->setLastModificationDate($now))
            ->add(Url::create("{$baseUrl}/orlando/quran-academy-orlando-florida")->setLastModificationDate($now))
            ->add(Url::create("{$baseUrl}/tampa/quran-academy-tampa-florida")->setLastModificationDate($now))

            // City-specific routes - Massachusetts
            ->add(Url::create("{$baseUrl}/boston/quran-academy-boston-massachusetts")->setLastModificationDate($now))
            ->add(Url::create("{$baseUrl}/cambridge/quran-academy-cambridge-massachusetts")->setLastModificationDate($now));

        $sitemap->writeToFile(public_path('sitemap.xml'));

        $this->info('✅ Sitemap generated using base URL: ' . $baseUrl);
        $this->info('✅ Sitemap generated successfully.');
    }
}
