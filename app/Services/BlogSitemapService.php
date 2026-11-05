<?php

namespace App\Services;

use App\Models\Blog;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Throwable;

class BlogSitemapService
{
    public const FILENAME = 'sitemap-blogs.xml';

    public function regenerate(): void
    {
        try {
            $baseUrl = rtrim((string) config('app.sitemap_base_url', 'https://roohulquranacademy.com'), '/');
            $now = now()->toAtomString();
            $blogs = Blog::query()
                ->where('status', true)
                ->orderByDesc('updated_at')
                ->get(['slug', 'updated_at']);

            $xml = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
            $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";
            $xml .= $this->urlNode($baseUrl . '/blogs', $now, 'daily', '0.7');

            foreach ($blogs as $blog) {
                $lastmod = optional($blog->updated_at)->toAtomString() ?: $now;
                $xml .= $this->urlNode($baseUrl . '/blogs/' . ltrim((string) $blog->slug, '/'), $lastmod, 'weekly', '0.6');
            }

            $xml .= '</urlset>' . "\n";

            File::put(public_path(self::FILENAME), $xml);
            $this->ensureListedInIndex($baseUrl, $now);
        } catch (Throwable $e) {
            Log::warning('Failed to regenerate blog sitemap: ' . $e->getMessage());
        }
    }

    private function urlNode(string $loc, string $lastmod, string $changefreq, string $priority): string
    {
        $loc = htmlspecialchars($loc, ENT_XML1 | ENT_QUOTES, 'UTF-8');

        return "    <url>\n"
            . "        <loc>{$loc}</loc>\n"
            . "        <lastmod>{$lastmod}</lastmod>\n"
            . "        <changefreq>{$changefreq}</changefreq>\n"
            . "        <priority>{$priority}</priority>\n"
            . "    </url>\n";
    }

    private function ensureListedInIndex(string $baseUrl, string $lastmod): void
    {
        $indexPath = public_path('sitemap_index.xml');
        if (! File::exists($indexPath)) {
            return;
        }

        $contents = File::get($indexPath);
        $sitemapUrl = htmlspecialchars($baseUrl . '/' . self::FILENAME, ENT_XML1 | ENT_QUOTES, 'UTF-8');
        $entry = "  <sitemap>\n"
            . "    <loc>{$sitemapUrl}</loc>\n"
            . "    <lastmod>{$lastmod}</lastmod>\n"
            . "  </sitemap>\n";

        if (preg_match('#<sitemap>\s*<loc>[^<]*sitemap-blogs\.xml</loc>\s*<lastmod>[^<]*</lastmod>\s*</sitemap>#s', $contents)) {
            $contents = preg_replace(
                '#<sitemap>\s*<loc>[^<]*sitemap-blogs\.xml</loc>\s*<lastmod>[^<]*</lastmod>\s*</sitemap>#s',
                trim($entry),
                $contents,
                1
            );
        } else {
            $contents = str_replace('</sitemapindex>', $entry . '</sitemapindex>', $contents);
        }

        File::put($indexPath, $contents);
    }
}
