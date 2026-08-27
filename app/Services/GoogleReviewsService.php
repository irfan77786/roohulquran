<?php

namespace App\Services;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Throwable;

class GoogleReviewsService
{
    private const STAR_MAP = [
        'ONE' => 1,
        'TWO' => 2,
        'THREE' => 3,
        'FOUR' => 4,
        'FIVE' => 5,
    ];

    public function getReviews(): array
    {
        $freshKey = 'google_reviews.fresh';
        $staleKey = 'google_reviews.stale';

        $cached = Cache::get($freshKey);
        if (is_array($cached) && ! empty($cached['reviews'])) {
            return $cached;
        }

        try {
            $data = $this->fetchFromDriver();
            if (! empty($data['reviews'])) {
                Cache::put($freshKey, $data, config('google-reviews.cache_ttl', 1800));
                Cache::put($staleKey, $data, config('google-reviews.stale_ttl', 86400));

                return $data;
            }
        } catch (Throwable $e) {
            Log::warning('Google Reviews fetch failed: '.$e->getMessage());
        }

        $stale = Cache::get($staleKey);
        if (is_array($stale) && ! empty($stale['reviews'])) {
            return $stale;
        }

        return $this->fallbackPayload();
    }

    public function refresh(): array
    {
        Cache::forget('google_reviews.fresh');

        return $this->getReviews();
    }

    public function isConfigured(): bool
    {
        $driver = config('google-reviews.driver', 'sociablekit');

        if ($driver === 'sociablekit' || $driver === 'embed') {
            return filled(config('google-reviews.embed.id'));
        }

        if ($driver === 'places') {
            return filled(config('google-reviews.places.api_key'))
                && filled(config('google-reviews.places.place_id'));
        }

        return filled(config('google-reviews.business_profile.client_id'))
            && filled(config('google-reviews.business_profile.client_secret'))
            && filled(config('google-reviews.business_profile.refresh_token'));
    }

    public function discoverAccountsAndLocations(): array
    {
        $token = $this->accessToken();
        $accounts = $this->listAccounts($token);
        $result = [];

        foreach ($accounts as $account) {
            $accountName = $account['name'] ?? null;
            if (! $accountName) {
                continue;
            }

            $locations = $this->listLocations($token, $accountName);
            $result[] = [
                'account' => $accountName,
                'account_name' => $account['accountName'] ?? ($account['name'] ?? ''),
                'locations' => collect($locations)->map(function ($location) {
                    return [
                        'name' => $location['name'] ?? null,
                        'title' => $location['title'] ?? ($location['locationName'] ?? null),
                        'store_code' => $location['storeCode'] ?? null,
                    ];
                })->values()->all(),
            ];
        }

        return $result;
    }

    private function fetchFromDriver(): array
    {
        if (! $this->isConfigured()) {
            return $this->fallbackPayload();
        }

        $driver = config('google-reviews.driver', 'sociablekit');

        return match ($driver) {
            'places' => $this->fetchFromPlaces(),
            'business_profile' => $this->fetchFromBusinessProfile(),
            default => $this->fetchFromSociableKit(),
        };
    }

    private function fetchFromSociableKit(): array
    {
        $embedId = trim((string) config('google-reviews.embed.id'));
        if ($embedId === '') {
            throw new \RuntimeException('Set GOOGLE_REVIEWS_EMBED_ID in .env');
        }

        $response = Http::timeout(20)
            ->acceptJson()
            ->get('https://data.accentapi.com/feed/'.$embedId.'.json', [
                'nocache' => time(),
            ]);

        if (! $response->successful()) {
            throw new \RuntimeException('SociableKIT feed error: '.$response->body());
        }

        $json = $response->json();
        $bio = $json['bio'] ?? [];
        $reviews = [];

        foreach ($json['reviews'] ?? [] as $review) {
            $mapped = $this->mapSociableKitReview($review);
            if ($mapped) {
                $reviews[] = $mapped;
            }
        }

        $reviews = $this->filterAndLimit($reviews);
        $mapsUrl = config('google-reviews.maps_url')
            ?: ($bio['link'] ?? null);

        return [
            'source' => 'sociablekit',
            'rating' => isset($bio['overall_star_rating'])
                ? round((float) $bio['overall_star_rating'], 1)
                : $this->averageOf($reviews),
            'total' => (int) ($bio['rating_count'] ?? count($reviews)),
            'maps_url' => $mapsUrl,
            'reviews' => $reviews,
            'fetched_at' => now()->toIso8601String(),
        ];
    }

    private function mapSociableKitReview(array $review): ?array
    {
        $rating = (int) ($review['rating'] ?? 0);
        if ($rating < 1) {
            return null;
        }

        $text = $this->plainReviewText($review['review_text'] ?? '');
        if ($text === '') {
            return null;
        }

        $created = $review['review_date_time'] ?? ($review['created_time'] ?? null);

        return [
            'author' => $this->plainReviewText($review['reviewer_name'] ?? 'Google User') ?: 'Google User',
            'rating' => $rating,
            'text' => $text,
            'photo' => $this->normalizeReviewPhoto($review['reviewer_photo_link'] ?? null),
            'relative_time' => $created
                ? \Carbon\Carbon::parse($created)->diffForHumans()
                : null,
            'create_time' => $created
                ? \Carbon\Carbon::parse($created)->toIso8601String()
                : null,
        ];
    }

    /**
     * SociableKIT scrapes Google markup and often wraps text in <span class=wiI7pd>.
     */
    private function plainReviewText(mixed $value): string
    {
        $text = html_entity_decode(strip_tags((string) $value), ENT_QUOTES | ENT_HTML5, 'UTF-8');
        $text = preg_replace('/\s+/u', ' ', $text) ?? $text;

        return trim($text);
    }

    private function normalizeReviewPhoto(?string $url): ?string
    {
        if (! filled($url)) {
            return null;
        }

        $url = trim($url);
        if (! filter_var($url, FILTER_VALIDATE_URL)) {
            return null;
        }

        // Normalize Google avatar size params (=s96-c… or =w100-h100-p…)
        $normalized = preg_replace(
            '/=(?:s\d+(?:-[a-z0-9]+)*|w\d+-h\d+(?:-[a-z0-9]+)*)$/i',
            '=s96-c-rp-mo-br100',
            $url
        );

        return $normalized ?: $url;
    }

    private function fetchFromBusinessProfile(): array
    {
        $token = $this->accessToken();
        $location = config('google-reviews.business_profile.location');

        if (! $location) {
            $discovered = $this->discoverAccountsAndLocations();
            $account = data_get($discovered, '0.account');
            $rawLocation = data_get($discovered, '0.locations.0.name');

            if ($account && $rawLocation) {
                $location = str_starts_with($rawLocation, 'accounts/')
                    ? $rawLocation
                    : rtrim($account, '/').'/'.ltrim($rawLocation, '/');
            }
        }

        if (! $location) {
            throw new \RuntimeException('No Google Business Profile location found. Set GOOGLE_BUSINESS_PROFILE_LOCATION.');
        }

        // Reviews endpoint still uses mybusiness v4 with accounts/.../locations/... path
        $locationPath = $this->normalizeLocationPath($location);
        $url = 'https://mybusiness.googleapis.com/v4/'.$locationPath.'/reviews';

        $reviews = [];
        $pageToken = null;
        $averageRating = null;
        $totalReviewCount = null;

        do {
            $query = ['pageSize' => 50];
            if ($pageToken) {
                $query['pageToken'] = $pageToken;
            }

            $response = Http::withToken($token)
                ->timeout(20)
                ->get($url, $query);

            if (! $response->successful()) {
                throw new \RuntimeException('Business Profile reviews error: '.$response->body());
            }

            $json = $response->json();
            $averageRating = $json['averageRating'] ?? $averageRating;
            $totalReviewCount = $json['totalReviewCount'] ?? $totalReviewCount;

            foreach ($json['reviews'] ?? [] as $review) {
                $mapped = $this->mapBusinessProfileReview($review);
                if ($mapped) {
                    $reviews[] = $mapped;
                }
            }

            $pageToken = $json['nextPageToken'] ?? null;
        } while ($pageToken && count($reviews) < 100);

        $reviews = $this->filterAndLimit($reviews);

        return [
            'source' => 'business_profile',
            'rating' => $averageRating !== null ? round((float) $averageRating, 1) : $this->averageOf($reviews),
            'total' => $totalReviewCount !== null ? (int) $totalReviewCount : count($reviews),
            'maps_url' => config('google-reviews.maps_url'),
            'reviews' => $reviews,
            'fetched_at' => now()->toIso8601String(),
        ];
    }

    private function fetchFromPlaces(): array
    {
        $apiKey = config('google-reviews.places.api_key');
        $placeId = config('google-reviews.places.place_id');

        $response = Http::timeout(20)->get('https://maps.googleapis.com/maps/api/place/details/json', [
            'place_id' => $placeId,
            'fields' => 'name,rating,user_ratings_total,url,reviews',
            'reviews_sort' => 'newest',
            'key' => $apiKey,
        ]);

        if (! $response->successful()) {
            throw new \RuntimeException('Places API HTTP error: '.$response->body());
        }

        $json = $response->json();
        if (($json['status'] ?? '') !== 'OK') {
            throw new \RuntimeException('Places API status: '.($json['status'] ?? 'UNKNOWN').' '.($json['error_message'] ?? ''));
        }

        $result = $json['result'] ?? [];
        $reviews = [];

        foreach ($result['reviews'] ?? [] as $review) {
            $mapped = $this->mapPlacesReview($review);
            if ($mapped) {
                $reviews[] = $mapped;
            }
        }

        $reviews = $this->filterAndLimit($reviews);

        return [
            'source' => 'places',
            'rating' => isset($result['rating']) ? round((float) $result['rating'], 1) : $this->averageOf($reviews),
            'total' => (int) ($result['user_ratings_total'] ?? count($reviews)),
            'maps_url' => config('google-reviews.maps_url') ?: ($result['url'] ?? null),
            'reviews' => $reviews,
            'fetched_at' => now()->toIso8601String(),
        ];
    }

    private function accessToken(): string
    {
        return Cache::remember('google_reviews.access_token', 3000, function () {
            $response = Http::asForm()->timeout(15)->post('https://oauth2.googleapis.com/token', [
                'client_id' => config('google-reviews.business_profile.client_id'),
                'client_secret' => config('google-reviews.business_profile.client_secret'),
                'refresh_token' => config('google-reviews.business_profile.refresh_token'),
                'grant_type' => 'refresh_token',
            ]);

            if (! $response->successful() || empty($response->json('access_token'))) {
                throw new \RuntimeException('Failed to refresh Google OAuth token: '.$response->body());
            }

            return $response->json('access_token');
        });
    }

    private function listAccounts(string $token): array
    {
        $response = Http::withToken($token)
            ->timeout(20)
            ->get('https://mybusinessaccountmanagement.googleapis.com/v1/accounts');

        if (! $response->successful()) {
            throw new \RuntimeException('Failed to list GBP accounts: '.$response->body());
        }

        return $response->json('accounts') ?? [];
    }

    private function listLocations(string $token, string $accountName): array
    {
        // Prefer Business Information API
        $response = Http::withToken($token)
            ->timeout(20)
            ->get('https://mybusinessbusinessinformation.googleapis.com/v1/'.$accountName.'/locations', [
                'readMask' => 'name,title,storeCode',
                'pageSize' => 100,
            ]);

        if ($response->successful()) {
            return $response->json('locations') ?? [];
        }

        // Fallback older endpoint shape
        $legacy = Http::withToken($token)
            ->timeout(20)
            ->get('https://mybusiness.googleapis.com/v4/'.$accountName.'/locations');

        if (! $legacy->successful()) {
            throw new \RuntimeException('Failed to list GBP locations: '.$response->body());
        }

        return $legacy->json('locations') ?? [];
    }

    private function normalizeLocationPath(string $location): string
    {
        $location = trim($location, '/');

        // Business Information API returns locations/{id}; reviews need accounts/{a}/locations/{l}
        if (str_starts_with($location, 'locations/') && ! str_contains($location, 'accounts/')) {
            throw new \RuntimeException(
                'Set GOOGLE_BUSINESS_PROFILE_LOCATION to accounts/{accountId}/locations/{locationId}. Run: php artisan google-reviews:discover'
            );
        }

        return $location;
    }

    private function mapBusinessProfileReview(array $review): ?array
    {
        $rating = self::STAR_MAP[$review['starRating'] ?? ''] ?? null;
        if ($rating === null) {
            return null;
        }

        $text = $this->plainReviewText($review['comment'] ?? '');
        // Strip optional translated block Google sometimes appends
        if (str_contains($text, '(Translated by Google)')) {
            $parts = preg_split('/\n?\(Translated by Google\)\n?/u', $text);
            $text = trim($parts[0] ?? $text);
        }

        return [
            'author' => $this->plainReviewText($review['reviewer']['displayName'] ?? 'Google User') ?: 'Google User',
            'rating' => $rating,
            'text' => $text,
            'photo' => $this->normalizeReviewPhoto($review['reviewer']['profilePhotoUrl'] ?? null),
            'relative_time' => isset($review['createTime'])
                ? \Carbon\Carbon::parse($review['createTime'])->diffForHumans()
                : null,
            'create_time' => $review['createTime'] ?? null,
        ];
    }

    private function mapPlacesReview(array $review): ?array
    {
        $rating = (int) ($review['rating'] ?? 0);
        if ($rating < 1) {
            return null;
        }

        return [
            'author' => $this->plainReviewText($review['author_name'] ?? 'Google User') ?: 'Google User',
            'rating' => $rating,
            'text' => $this->plainReviewText($review['text'] ?? ''),
            'photo' => $this->normalizeReviewPhoto($review['profile_photo_url'] ?? null),
            'relative_time' => $review['relative_time_description'] ?? null,
            'create_time' => isset($review['time'])
                ? \Carbon\Carbon::createFromTimestamp($review['time'])->toIso8601String()
                : null,
        ];
    }

    private function filterAndLimit(array $reviews): array
    {
        $minRating = (int) config('google-reviews.min_rating', 4);
        $max = (int) config('google-reviews.max_reviews', 10);

        $filtered = array_values(array_filter($reviews, function ($review) use ($minRating) {
            if (($review['rating'] ?? 0) < $minRating) {
                return false;
            }

            return filled($review['text'] ?? null);
        }));

        usort($filtered, function ($a, $b) {
            return strcmp($b['create_time'] ?? '', $a['create_time'] ?? '');
        });

        return array_slice($filtered, 0, max(1, $max));
    }

    private function averageOf(array $reviews): float
    {
        if (empty($reviews)) {
            return 0.0;
        }

        $sum = array_sum(array_column($reviews, 'rating'));

        return round($sum / count($reviews), 1);
    }

    private function fallbackPayload(): array
    {
        $fallback = config('google-reviews.fallback', []);

        return [
            'source' => 'fallback',
            'rating' => (float) ($fallback['rating'] ?? 5),
            'total' => (int) ($fallback['total'] ?? count($fallback['reviews'] ?? [])),
            'maps_url' => config('google-reviews.maps_url'),
            'reviews' => $fallback['reviews'] ?? [],
            'fetched_at' => null,
        ];
    }
}
