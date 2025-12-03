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
        if (!$this->featured_image) {
            return null;
        }
        
        // If it's already a full URL (Cloudinary URL), return it directly
        if (filter_var($this->featured_image, FILTER_VALIDATE_URL)) {
            return $this->featured_image;
        }
        
        // Otherwise, it's a local storage path (for backward compatibility)
        return asset('storage/' . $this->featured_image);
    }
}
