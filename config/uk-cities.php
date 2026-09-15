<?php

$uk = require __DIR__ . '/locations/uk.php';

$cities = [];
$londonAreas = [];

foreach ($uk['locations'] ?? [] as $location) {
    $slug = $location['slug'] ?? null;
    if (! is_string($slug) || $slug === '') {
        continue;
    }
    if (($location['kind'] ?? '') === 'london_borough') {
        $londonAreas[] = $slug;
    } else {
        $cities[] = $slug;
    }
}

return [
    'cities' => $cities,
    'london_areas' => $londonAreas,
];
