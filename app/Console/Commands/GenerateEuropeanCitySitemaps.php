<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class GenerateEuropeanCitySitemaps extends Command
{
    protected $signature = 'sitemap:generate-european-cities
                            {--dir=routes/cities : Directory containing *-cities.php route files}
                            {--out=public/sitemaps/eu : Output directory for XML sitemaps}
                            {--index=sitemap-europe-cities.xml : Filename of the sitemap index}
                            {--url= : Base URL for all sitemap links (e.g. https://roohulquranacademy.com). Uses APP_URL if not set.}';

    protected $description = 'Generate one sitemap XML per European country and a single EU sitemap index for Google Search Console';

    public function handle()
    {
        $routesDir = base_path($this->option('dir'));
        $outputDir = base_path($this->option('out'));
        $indexFilename = $this->option('index');

        if (!is_dir($routesDir)) {
            $this->error("Routes directory not found: {$routesDir}");
            return 1;
        }

        $baseUrl = $this->option('url')
            ? rtrim($this->option('url'), '/')
            : rtrim(config('app.url'), '/');
        $this->info('Using base URL: ' . $baseUrl);
        $now = now()->toIso8601String();

        $files = glob($routesDir . '/*-cities.php');
        if (empty($files)) {
            $this->warn('No *-cities.php files found in ' . $routesDir);
            return 0;
        }

        if (!is_dir($outputDir)) {
            mkdir($outputDir, 0755, true);
        }

        $indexEntries = [];
        $totalUrls = 0;

        foreach ($files as $file) {
            $basename = basename($file, '.php');
            $countrySlug = str_replace('-cities', '', $basename);
            $paths = $this->extractPathsFromRouteFile($file);
            if (empty($paths)) {
                $this->warn("  No routes found in " . basename($file));
                continue;
            }

            $sitemapFilename = 'sitemap-eu-' . $countrySlug . '.xml';
            $sitemapPath = $outputDir . DIRECTORY_SEPARATOR . $sitemapFilename;
            $this->writeUrlset($sitemapPath, $baseUrl, $paths, $now);
            $totalUrls += count($paths);

            $relativeOut = str_replace('\\', '/', trim(str_replace(public_path(), '', $outputDir), '/\\'));
            $sitemapUrl = $baseUrl . '/' . $relativeOut . '/' . $sitemapFilename;
            $indexEntries[] = [
                'loc' => $sitemapUrl,
                'lastmod' => $now,
            ];
            $this->info('  ' . basename($sitemapFilename) . ' — ' . count($paths) . ' URLs');
        }

        $indexPath = $outputDir . DIRECTORY_SEPARATOR . $indexFilename;
        $relativeOut = str_replace('\\', '/', trim(str_replace(public_path(), '', $outputDir), '/\\'));
        $indexUrl = $baseUrl . '/' . $relativeOut . '/' . $indexFilename;
        $this->writeSitemapIndex($indexPath, $indexEntries, $now);
        $this->info('');
        $this->info('Sitemap index: ' . $indexUrl);
        $this->info('Total: ' . $totalUrls . ' URLs in ' . count($indexEntries) . ' sitemaps.');
        $this->info('Submit this URL in Google Search Console: ' . $indexUrl);

        return 0;
    }

    /**
     * Extract URL paths from Route::get('path', ...) in a PHP route file.
     */
    protected function extractPathsFromRouteFile(string $file): array
    {
        $content = file_get_contents($file);
        if (preg_match_all("/Route::get\s*\(\s*'([^']+)'\s*,/", $content, $m)) {
            return array_values(array_unique($m[1]));
        }
        return [];
    }

    protected function writeUrlset(string $filePath, string $baseUrl, array $paths, string $lastmod): void
    {
        $xml = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
        $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";
        foreach ($paths as $routePath) {
            $loc = $baseUrl . '/' . ltrim($routePath, '/');
            $xml .= '  <url>' . "\n";
            $xml .= '    <loc>' . $this->escapeXml($loc) . '</loc>' . "\n";
            $xml .= '    <lastmod>' . $this->escapeXml($lastmod) . '</lastmod>' . "\n";
            $xml .= '  </url>' . "\n";
        }
        $xml .= '</urlset>';
        file_put_contents($filePath, $xml);
    }

    protected function writeSitemapIndex(string $path, array $entries, string $lastmod): void
    {
        $xml = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
        $xml .= '<sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";
        foreach ($entries as $entry) {
            $xml .= '  <sitemap>' . "\n";
            $xml .= '    <loc>' . $this->escapeXml($entry['loc']) . '</loc>' . "\n";
            $xml .= '    <lastmod>' . $this->escapeXml($entry['lastmod']) . '</lastmod>' . "\n";
            $xml .= '  </sitemap>' . "\n";
        }
        $xml .= '</sitemapindex>';
        file_put_contents($path, $xml);
    }

    protected function escapeXml(string $s): string
    {
        return htmlspecialchars($s, ENT_XML1 | ENT_QUOTES, 'UTF-8');
    }
}
