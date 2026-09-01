<?php

namespace App\Support;

class UkLocations
{
    /**
     * @return array<int, array{city: string, state: string, path: string}>
     */
    public static function pages(): array
    {
        $configFile = dirname(__DIR__, 2) . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'uk-cities.php';
        $config = is_file($configFile) ? require $configFile : [];

        $pages = [];

        foreach (self::slugs($config['cities'] ?? []) as $city) {
            $pages[] = [
                'city' => $city,
                'state' => 'united-kingdom',
                'path' => "/{$city}/quran-academy-{$city}-united-kingdom",
            ];
        }

        foreach (self::slugs($config['london_areas'] ?? []) as $area) {
            $pages[] = [
                'city' => $area,
                'state' => 'london',
                'path' => "/{$area}/quran-academy-{$area}-london",
            ];
        }

        return $pages;
    }

    /**
     * @param  mixed  $values
     * @return array<int, string>
     */
    private static function slugs($values): array
    {
        if (! is_array($values)) {
            return [];
        }

        $slugs = [];
        foreach ($values as $value) {
            if (! is_string($value) && ! is_numeric($value)) {
                continue;
            }
            $slug = trim((string) $value);
            if ($slug !== '') {
                $slugs[] = $slug;
            }
        }

        return $slugs;
    }
}
