<?xml version="1.0" encoding="UTF-8"?>
@php
    $base = rtrim((string) config('app.sitemap_base_url', 'https://roohulquranacademy.com'), '/');
@endphp
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xhtml="http://www.w3.org/1999/xhtml"
    xmlns:image="http://www.google.com/schemas/sitemap-image/1.1"
    xmlns:video="http://www.google.com/schemas/sitemap-video/1.1"
    xmlns:news="http://www.google.com/schemas/sitemap-news/0.9">
    <!-- Static Pages -->
    <url>
        <loc>{{ $base }}/</loc>
        <lastmod>{{ now()->toAtomString() }}</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc>{{ $base }}/about</loc>
        <lastmod>{{ now()->toAtomString() }}</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc>{{ $base }}/pricing</loc>
        <lastmod>{{ now()->toAtomString() }}</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc>{{ $base }}/contact-us</loc>
        <lastmod>{{ now()->toAtomString() }}</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.7</priority>
    </url>
    <url>
        <loc>{{ $base }}/quran-reading-with-tajweed</loc>
        <lastmod>{{ now()->toAtomString() }}</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.7</priority>
    </url>
    <url>
        <loc>{{ $base }}/qaida-by-roohulquran</loc>
        <lastmod>{{ now()->toAtomString() }}</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.7</priority>
    </url>
    <url>
        <loc>{{ $base }}/teachers</loc>
        <lastmod>{{ now()->toAtomString() }}</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.7</priority>
    </url>
    <url>
        <loc>{{ $base }}/tafseer-course-online</loc>
        <lastmod>{{ now()->toAtomString() }}</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.7</priority>
    </url>
    <url>
        <loc>{{ $base }}/memorize-quran-online</loc>
        <lastmod>{{ now()->toAtomString() }}</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.7</priority>
    </url>
    <url>
        <loc>{{ $base }}/beginner-quran-classes</loc>
        <lastmod>{{ now()->toAtomString() }}</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.7</priority>
    </url>
    <url>
        <loc>{{ $base }}/kids-quran-classes</loc>
        <lastmod>{{ now()->toAtomString() }}</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.7</priority>
    </url>

    <!-- Main UK city pages -->
    @foreach (config('uk-cities.cities', []) as $city)
    <url>
        <loc>{{ $base }}/{{ $city }}/quran-academy-{{ $city }}-united-kingdom</loc>
        <lastmod>{{ now()->toAtomString() }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.6</priority>
    </url>
    @endforeach

    <!-- London area pages -->
    @foreach (config('uk-cities.london_areas', []) as $area)
    <url>
        <loc>{{ $base }}/{{ $area }}/quran-academy-{{ $area }}-london</loc>
        <lastmod>{{ now()->toAtomString() }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.6</priority>
    </url>
    @endforeach

    <!-- Blog List Page -->
    <url>
        <loc>{{ $base }}/blogs</loc>
        <lastmod>{{ now()->toAtomString() }}</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.6</priority>
    </url>

    <!-- Blog Detail Pages -->
    @foreach ($blogs as $blog)
    <url>
        <loc>{{ $base }}/blogs/{{ $blog->slug }}</loc>
        <lastmod>{{ $blog->updated_at->toAtomString() }}</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.6</priority>
    </url>
    @endforeach

</urlset>
