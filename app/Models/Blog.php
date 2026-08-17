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

        // UploadedFile was accidentally saved as a Windows/PHP temp path.
        if (preg_match('/^[A-Za-z]:[\\\\\\/]/', $image) || str_starts_with($image, '/tmp/')) {
            return null;
        }

        if (filter_var($image, FILTER_VALIDATE_URL)) {
            return $image;
        }

        $image = ltrim(str_replace('\\', '/', $image), '/');
        if (str_starts_with($image, 'public/')) {
            $image = substr($image, 7);
        }
        if (str_starts_with($image, 'storage/')) {
            $image = substr($image, 8);
        }

        // Root-relative URL so images work on http and https (no mixed-content).
        return '/storage/' . $image;
    }
}
