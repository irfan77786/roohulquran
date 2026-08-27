<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'author',
        'content',
        'excerpt',
        'featured_image',
        'seo',
        'status',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'primary_keyword',
        'secondary_keywords',
        'faqs',
        'internal_links',
    ];

    protected $casts = [
        'seo' => 'array',
        'faqs' => 'array',
        'internal_links' => 'array',
        'status' => 'boolean',
    ];

    public function getSeoTitleAttribute(): string
    {
        return trim((string) ($this->meta_title ?: $this->title));
    }

    public function getSeoDescriptionAttribute(): string
    {
        $text = $this->meta_description ?: $this->excerpt ?: strip_tags((string) $this->content);

        return \Illuminate\Support\Str::limit(trim(preg_replace('/\s+/', ' ', strip_tags((string) $text))), 160, '');
    }

    public function getSeoKeywordsAttribute(): string
    {
        $parts = array_filter([
            $this->primary_keyword,
            $this->secondary_keywords,
            $this->meta_keywords,
            data_get($this->seo, 'keywords'),
        ]);

        $keywords = [];
        foreach ($parts as $part) {
            foreach (explode(',', (string) $part) as $keyword) {
                $keyword = trim($keyword);
                if ($keyword !== '') {
                    $keywords[] = $keyword;
                }
            }
        }

        return implode(', ', array_unique($keywords));
    }

    public function faqItems(): array
    {
        $faqs = is_array($this->faqs) ? $this->faqs : [];

        return array_values(array_filter($faqs, function ($faq) {
            return filled($faq['question'] ?? null) && filled($faq['answer'] ?? null);
        }));
    }

    public function internalLinkItems(): array
    {
        $links = is_array($this->internal_links) ? $this->internal_links : [];

        return array_values(array_filter($links, function ($link) {
            return filled($link['label'] ?? null) && filled($link['url'] ?? null);
        }));
    }
    public function getImageUrlAttribute()
    {
        $image = trim((string) $this->featured_image);
        if ($image === '') {
            return null;
        }

        $image = str_replace('\\', '/', $image);

        if (preg_match('/^[A-Za-z]:\//', $image) || str_starts_with($image, '/tmp/')) {
            $basename = basename($image);
            if ($basename !== '' && $basename !== $image) {
                $relative = 'blogs/' . $basename;
                if ($url = $this->publicFileUrl($relative)) {
                    return $url;
                }
            }

            return null;
        }

        if (filter_var($image, FILTER_VALIDATE_URL)) {
            return $image;
        }

        $relative = ltrim($image, '/');
        foreach (['public/', 'storage/', 'uploads/'] as $prefix) {
            if (str_starts_with($relative, $prefix)) {
                $relative = substr($relative, strlen($prefix));
            }
        }

        if (! str_contains($relative, '/')) {
            $relative = 'blogs/' . $relative;
        }

        return $this->publicFileUrl($relative) ?? '/storage/' . $relative;
    }

    private function publicFileUrl(string $relative): ?string
    {
        $relative = ltrim(str_replace('\\', '/', $relative), '/');

        if (is_file(public_path('uploads/' . $relative))) {
            return '/uploads/' . $relative;
        }

        if (is_file(public_path('storage/' . $relative))) {
            return '/storage/' . $relative;
        }

        if (is_file(storage_path('app/public/' . $relative))) {
            return '/storage/' . $relative;
        }

        return null;
    }
}
