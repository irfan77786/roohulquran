<?php

namespace App\Support;

class LocationCatalog
{
    /**
     * @return array<int, array<string, mixed>>
     */
    public static function pages(?string $countryKey = null): array
    {
        $pages = [];

        foreach (self::countryKeys($countryKey) as $key) {
            $country = config("locations.countries.{$key}");
            if (! is_array($country)) {
                continue;
            }

            foreach ($country['locations'] ?? [] as $location) {
                if (! is_array($location) || empty($location['slug'])) {
                    continue;
                }
                $pages[] = self::hydrate($key, $country, $location);
            }
        }

        return $pages;
    }

    /**
     * @return array<string, mixed>|null
     */
    public static function find(string $slug, string $regionSlug): ?array
    {
        $slug = strtolower(trim($slug));
        $regionSlug = strtolower(trim($regionSlug));

        foreach (self::pages() as $page) {
            if ($page['slug'] === $slug && $page['region_slug'] === $regionSlug) {
                return $page;
            }
        }

        return null;
    }

    /**
     * @return array<int, array<string, mixed>>
     */
    public static function featured(?string $countryKey = null, int $limit = 12): array
    {
        $featured = array_values(array_filter(
            self::pages($countryKey),
            static fn (array $page): bool => ! empty($page['featured'])
        ));

        if ($featured === []) {
            $featured = self::pages($countryKey);
        }

        return array_slice($featured, 0, $limit);
    }

    /**
     * @param  array<string, mixed>  $country
     * @param  array<string, mixed>  $location
     * @return array<string, mixed>
     */
    private static function hydrate(string $countryKey, array $country, array $location): array
    {
        $slug = strtolower(trim((string) $location['slug']));
        $kind = $location['kind'] ?? 'city';
        $pathCountry = (string) ($country['path_country'] ?? $countryKey);

        if ($kind === 'london_borough') {
            $regionSlug = 'london';
            $regionName = 'London';
            $path = "/{$slug}/quran-academy-{$slug}-london";
        } else {
            $regionSlug = $pathCountry;
            $regionName = (string) ($country['country'] ?? ucwords(str_replace('-', ' ', $pathCountry)));
            $path = "/{$slug}/quran-academy-{$slug}-{$pathCountry}";
        }

        $nearby = self::nearbyFor($countryKey, $slug, (string) ($location['region'] ?? ''), $kind, $country);

        return array_merge($location, [
            'country_key' => $countryKey,
            'country_name' => $country['country'] ?? $regionName,
            'timezone' => $country['timezone'] ?? 'Europe/London',
            'locale' => $country['locale'] ?? 'en-GB',
            'schedule_note' => $country['schedule_note'] ?? '',
            'region_slug' => $regionSlug,
            'region_name' => $regionName,
            'path' => $path,
            'nearby' => $nearby,
            'url' => $path,
        ]);
    }

    /**
     * @param  array<string, mixed>  $country
     * @param  array<string, mixed>  $location
     */
    public static function pathFor(array $country, array $location): string
    {
        $slug = strtolower(trim((string) ($location['slug'] ?? '')));
        $kind = $location['kind'] ?? 'city';
        $pathCountry = (string) ($country['path_country'] ?? 'united-kingdom');

        if ($kind === 'london_borough') {
            return "/{$slug}/quran-academy-{$slug}-london";
        }

        return "/{$slug}/quran-academy-{$slug}-{$pathCountry}";
    }

    /**
     * @param  array<string, mixed>  $country
     * @return array<int, array{name: string, path: string}>
     */
    private static function nearbyFor(string $countryKey, string $slug, string $region, string $kind, array $country): array
    {
        $candidates = [];
        foreach ($country['locations'] ?? [] as $location) {
            if (! is_array($location) || ($location['slug'] ?? '') === $slug) {
                continue;
            }
            $sameCluster = ($location['kind'] ?? '') === $kind
                && (($location['region'] ?? '') === $region);
            $score = $sameCluster ? 0 : 1;
            $candidates[] = ['score' => $score, 'location' => $location];
        }

        usort($candidates, static fn ($a, $b) => $a['score'] <=> $b['score']);

        $links = [];
        foreach (array_slice($candidates, 0, 6) as $row) {
            $links[] = [
                'name' => $row['location']['name'] ?? ucwords(str_replace('-', ' ', (string) $row['location']['slug'])),
                'path' => self::pathFor($country, $row['location']),
            ];
        }

        return $links;
    }

    /**
     * @return array<int, string>
     */
    private static function countryKeys(?string $countryKey): array
    {
        if ($countryKey) {
            return [$countryKey];
        }

        return array_keys(config('locations.countries', []));
    }
}
