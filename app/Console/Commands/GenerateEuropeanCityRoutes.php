<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class GenerateEuropeanCityRoutes extends Command
{
    protected $signature = 'routes:generate-european-cities
                            {--output= : Single output file (if set, all countries in one file)}
                            {--dir=routes/cities : Directory for separate country files (used when --output is not set)}
                            {--countries= : Comma-separated country names (default: all European list)}';

    protected $description = 'Generate city routes for European countries; one file per country in routes/cities/ by default';

    /** @var array Country name => ISO2 code for the countries we support */
    protected $countryIso2 = [
        'Albania' => 'AL',
        'Hungary' => 'HU',
        'Italy' => 'IT',
        'Belarus' => 'BY',
        'Belgium' => 'BE',
        'Bosnia and Herzegovina' => 'BA',
        'Spain' => 'ES',
        'Sweden' => 'SE',
        'Switzerland' => 'CH',
        'Luxembourg' => 'LU',
        'Denmark' => 'DK',
        'Malta' => 'MT',
        'Moldova' => 'MD',
        'Monaco' => 'MC',
        'Finland' => 'FI',
        'France' => 'FR',
        'Netherlands' => 'NL',
        'North Macedonia' => 'MK',
        'Norway' => 'NO',
        'Georgia' => 'GE',
        'Germany' => 'DE',
        'Greece' => 'GR',
    ];

    protected $baseUrl = 'https://raw.githubusercontent.com/dr5hn/countries-states-cities-database/master';

    public function handle()
    {
        $singleOutput = $this->option('output');
        $outputDir = base_path($this->option('dir'));
        $countriesOption = $this->option('countries');
        $countryNames = $countriesOption
            ? array_map('trim', explode(',', $countriesOption))
            : array_keys($this->countryIso2);

        $this->info('Generating European city routes for: ' . implode(', ', $countryNames));
        if ($singleOutput) {
            $this->info('Output: single file ' . $singleOutput);
        } else {
            $this->info('Output: separate files in ' . $outputDir);
        }

        $header = [
            '<?php',
            '',
            'use Illuminate\Support\Facades\Route;',
            'use App\Http\Controllers\HomeController;',
            '',
        ];

        $totalRoutes = 0;
        $allLines = $singleOutput ? $header : [];

        foreach ($countryNames as $countryName) {
            $countryName = trim($countryName);
            $iso2 = $this->countryIso2[$countryName] ?? null;
            if (!$iso2) {
                $this->warn("Unknown country: {$countryName}, skipping.");
                continue;
            }
            $countrySlug = Str::slug($countryName);
            $this->line("Fetching cities for {$countryName} ({$iso2})...");

            $cities = $this->fetchCitiesByCountry($iso2);
            if (empty($cities)) {
                $this->warn("  No cities found for {$countryName}.");
                continue;
            }

            $lines = $singleOutput ? [] : $header;
            $seen = [];
            $countryCount = 0;
            foreach ($cities as $city) {
                $name = $city['name'] ?? '';
                if ($name === '') {
                    continue;
                }
                $baseSlug = Str::slug($name);
                if ($baseSlug === '') {
                    continue;
                }
                $key = $baseSlug . '|' . $countrySlug;
                if (!isset($seen[$key])) {
                    $seen[$key] = 0;
                } else {
                    $seen[$key]++;
                }
                $citySlug = $seen[$key] === 0 ? $baseSlug : $baseSlug . '-' . $seen[$key];
                $path = '/' . $citySlug . '/quran-academy-' . $citySlug . '-' . $countrySlug;
                $routeLines = [
                    "Route::get('{$path}', [HomeController::class, 'cityPage'])",
                    "    ->defaults('city', '" . addslashes($citySlug) . "')",
                    "    ->defaults('state', '" . addslashes($countrySlug) . "');",
                    '',
                ];
                if ($singleOutput) {
                    $allLines = array_merge($allLines, $routeLines);
                } else {
                    $lines = array_merge($lines, $routeLines);
                }
                $totalRoutes++;
                $countryCount++;
            }

            if (!$singleOutput && $countryCount > 0) {
                $dir = rtrim($outputDir, '/\\');
                if (!is_dir($dir)) {
                    mkdir($dir, 0755, true);
                }
                $file = $dir . DIRECTORY_SEPARATOR . $countrySlug . '-cities.php';
                file_put_contents($file, implode("\n", $lines));
                $this->info("  Written {$countryCount} routes to " . basename($file));
            }
        }

        if ($singleOutput && !empty($allLines)) {
            $fullPath = base_path($singleOutput);
            $dir = dirname($fullPath);
            if (!is_dir($dir)) {
                mkdir($dir, 0755, true);
            }
            file_put_contents($fullPath, implode("\n", $allLines));
            $this->info("Written {$totalRoutes} routes to {$fullPath}");
        }

        $this->info("Total: {$totalRoutes} routes.");
        return 0;
    }

    /**
     * Fetch cities for a country. Tries contributions/cities/{iso2}.json first, then full cities.json.
     */
    protected function fetchCitiesByCountry(string $iso2): array
    {
        $url = $this->baseUrl . '/contributions/cities/' . $iso2 . '.json';
        $response = Http::timeout(60)->get($url);
        if ($response->successful()) {
            $data = $response->json();
            return is_array($data) ? $data : [];
        }

        $this->warn("  contributions/cities/{$iso2}.json not found, trying full cities.json (may be slow)...");
        $countriesUrl = $this->baseUrl . '/countries.json';
        $countriesResponse = Http::timeout(30)->get($countriesUrl);
        if (!$countriesResponse->successful()) {
            $this->error("  Could not fetch countries.json");
            return [];
        }
        $countries = $countriesResponse->json();
        $countryId = null;
        foreach ($countries as $c) {
            if (($c['iso2'] ?? '') === $iso2) {
                $countryId = (int) ($c['id'] ?? 0);
                break;
            }
        }
        if ($countryId === null) {
            $this->error("  Country ID not found for {$iso2}");
            return [];
        }

        $citiesUrl = $this->baseUrl . '/cities.json';
        $this->line("  Downloading cities.json (this may take a minute)...");
        $citiesResponse = Http::timeout(300)->get($citiesUrl);
        if (!$citiesResponse->successful()) {
            $this->error("  Could not fetch cities.json");
            return [];
        }
        $allCities = $citiesResponse->json();
        if (!is_array($allCities)) {
            return [];
        }
        return array_values(array_filter($allCities, function ($city) use ($countryId) {
            return (int) ($city['country_id'] ?? 0) === $countryId;
        }));
    }
}
