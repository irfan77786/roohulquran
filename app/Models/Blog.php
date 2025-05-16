<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'slug', 'author', 'content', 'excerpt', 'featured_image', 'seo', 'status'
    ];

    protected $casts = [
        'seo' => 'array',
        'status' => 'boolean',
    ];
}
