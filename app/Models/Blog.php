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
        'status'
    ];

    protected $casts = [
        'seo' => 'array',
        'status' => 'boolean',
    ];
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
