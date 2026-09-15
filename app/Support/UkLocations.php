<?php

namespace App\Support;

/**
 * @deprecated Use LocationCatalog. Kept so sitemap and older calls keep working.
 */
class UkLocations
{
    /**
     * @return array<int, array{city: string, state: string, path: string}>
     */
    public static function pages(): array
    {
        $pages = [];

        foreach (LocationCatalog::pages('uk') as $page) {
            $pages[] = [
                'city' => $page['slug'],
                'state' => $page['region_slug'],
                'path' => $page['path'],
            ];
        }

        return $pages;
    }
}
