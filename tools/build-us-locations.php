<?php

/**
 * Writes config/locations/us.php from the source arrays.
 * Run: php tools/build-us-locations.php
 */

$cities = require __DIR__ . '/us-location-source.php';

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

    'country' => 'United States',
    'country_slug' => 'us',
    'path_country' => 'united-states',
    'timezone' => 'America/New_York',
    'locale' => 'en-US',
    'currency' => 'USD',
    'schedule_note' => 'US evenings, weekends, and after-school slots across Eastern, Central, Mountain, and Pacific time',

    'locations' => {$export},

];

PHP;

$target = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'locations' . DIRECTORY_SEPARATOR . 'us.php';
if (! is_dir(dirname($target))) {
    mkdir(dirname($target), 0777, true);
}

file_put_contents($target, $php);
echo 'Wrote ' . $target . ' (' . count($cities) . ' locations)' . PHP_EOL;
