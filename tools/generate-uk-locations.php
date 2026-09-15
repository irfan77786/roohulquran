<?php

/**
 * Writes config/locations/uk.php from the source arrays.
 * Run: php tools/generate-uk-locations.php
 */

$part1 = require __DIR__ . '/uk-location-source.php';
$part2 = require __DIR__ . '/uk-location-source-part2.php';

$cities = array_merge($part1, $part2);

$slugs = array_column($cities, 'slug');
if (count($slugs) !== count(array_unique($slugs))) {
    fwrite(STDERR, 'Duplicate slugs found' . PHP_EOL);
    exit(1);
}

if (count($cities) !== 100) {
    fwrite(STDERR, 'Expected 100 locations, got ' . count($cities) . PHP_EOL);
    exit(1);
}

$export = var_export($cities, true);

$php = <<<PHP
<?php

return [

    'country' => 'United Kingdom',
    'country_slug' => 'uk',
    'path_country' => 'united-kingdom',
    'timezone' => 'Europe/London',
    'locale' => 'en-GB',
    'currency' => 'GBP',
    'schedule_note' => 'UK evenings, weekends, and after-school slots (GMT/BST)',

    'locations' => {$export},

];

PHP;

$target = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'locations' . DIRECTORY_SEPARATOR . 'uk.php';
if (! is_dir(dirname($target))) {
    mkdir(dirname($target), 0777, true);
}

file_put_contents($target, $php);
echo 'Wrote ' . $target . ' (' . count($cities) . ' locations)' . PHP_EOL;
