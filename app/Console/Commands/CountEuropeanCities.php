<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CountEuropeanCities extends Command
{
    protected $signature = 'cities:count-eu {--dir=routes/cities : Directory containing *-cities.php files}';

    protected $description = 'Count cities per EU country and show total';

    public function handle()
    {
        $dir = base_path($this->option('dir'));
        $files = glob($dir . '/*-cities.php');
        if (empty($files)) {
            $this->warn('No *-cities.php files in ' . $dir);
            return 0;
        }

        $rows = [];
        $total = 0;
        foreach ($files as $file) {
            $count = $this->countRoutesInFile($file);
            $country = $this->fileToCountryName($file);
            $rows[] = [$country, $count];
            $total += $count;
        }

        usort($rows, fn ($a, $b) => strcasecmp($a[0], $b[0]));
        $this->table(['Country', 'Cities'], $rows);
        $this->info('Total: ' . number_format($total) . ' cities in ' . count($rows) . ' countries.');
        return 0;
    }

    protected function countRoutesInFile(string $file): int
    {
        $content = file_get_contents($file);
        return preg_match_all("/Route::get\s*\(\s*'([^']+)'\s*,/", $content, $m) ? count($m[1]) : 0;
    }

    protected function fileToCountryName(string $file): string
    {
        $basename = basename($file, '.php');
        $slug = str_replace('-cities', '', $basename);
        return ucwords(str_replace('-', ' ', $slug));
    }
}
