<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\AdminNotification;
use App\Services\BlogSitemapService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        $query = Blog::query();

        // Search filter
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                  ->orWhere('slug', 'like', "%{$search}%")
                  ->orWhere('content', 'like', "%{$search}%");
            });
        }

        // Status filter
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        // Date range filter
        if ($request->filled('date_from')) {
            $query->whereDate('created_at', '>=', $request->date_from);
        }
        if ($request->filled('date_to')) {
            $query->whereDate('created_at', '<=', $request->date_to);
        }

        $blogs = $query->latest()->paginate(10)->withQueryString();

        return view('admin.blog.index', [
            'blogs' => $blogs,
            'suggestedLinks' => $this->suggestedInternalLinks(),
            'formBlog' => old('blog_id') ? Blog::find(old('blog_id')) : null,
        ]);
    }

    public function create(Request $request)
    {
        if ($request->ajax()) {
            return view('admin.blog.partials.form', [
                'suggestedLinks' => $this->suggestedInternalLinks(),
            ]);
        }

        return redirect()->route('admin.blogs.index', ['create' => 1]);
    }

    public function store(Request $request)
    {
        $validated = $this->validatedBlogData($request);
        $imageFile = $request->file('featured_image');
        unset($validated['featured_image']);

        $validated['slug'] = $this->uniqueSlug($validated['title'], $request->input('slug'));
        $validated['author'] = auth()->user()->name;
        $validated['content'] = $this->normalizeHeadings($validated['content']);
        $validated['faqs'] = $this->cleanRepeater($request->input('faqs', []), ['question', 'answer']);
        $validated['internal_links'] = $this->cleanRepeater($request->input('internal_links', []), ['label', 'url']);
        $validated['seo'] = [
            'keywords' => trim(implode(', ', array_filter([
                $validated['primary_keyword'] ?? '',
                $validated['secondary_keywords'] ?? '',
            ]))),
        ];

        $blog = new Blog($validated);
        $blog->save();

        if ($imageFile) {
            $blog->featured_image = $this->storeFeaturedImage($imageFile, $blog->id);
            $blog->save();
        }

        if ($blog->status) {
            AdminNotification::createNotification(
                'blog',
                'New Blog Published',
                $validated['title'] . ' has been published',
                'ti ti-file-text',
                'success',
                ['blog_id' => $blog->id, 'title' => $validated['title']],
                'blog',
                $blog->id
            );
        }

        app(BlogSitemapService::class)->regenerate();

        return redirect()->route('admin.blogs.index')->with('success', 'Blog created!');
    }

    public function show(Blog $blog)
    {
        return view('admin.blog.show', compact('blog'));
    }


    public function edit(Request $request, Blog $blog)
    {
        if ($request->ajax()) {
            return view('admin.blog.partials.form', [
                'blog' => $blog,
                'suggestedLinks' => $this->suggestedInternalLinks(),
            ]);
        }

        return redirect()->route('admin.blogs.index', ['edit' => $blog->id]);
    }
    public function update(Request $request, Blog $blog)
    {
        $validated = $this->validatedBlogData($request);
        $imageFile = $request->file('featured_image');
        unset($validated['featured_image']);

        $validated['slug'] = $this->uniqueSlug($validated['title'], $request->input('slug'), $blog->id);
        $validated['author'] = auth()->user()->name;
        $validated['content'] = $this->normalizeHeadings($validated['content']);
        $validated['faqs'] = $this->cleanRepeater($request->input('faqs', []), ['question', 'answer']);
        $validated['internal_links'] = $this->cleanRepeater($request->input('internal_links', []), ['label', 'url']);
        $validated['seo'] = [
            'keywords' => trim(implode(', ', array_filter([
                $validated['primary_keyword'] ?? '',
                $validated['secondary_keywords'] ?? '',
            ]))),
        ];

        $blog->update($validated);

        if ($imageFile) {
            $this->deleteFeaturedImage($blog->featured_image);
            $blog->featured_image = $this->storeFeaturedImage($imageFile, $blog->id);
            $blog->save();
        }

        app(BlogSitemapService::class)->regenerate();

        return redirect()->route('admin.blogs.index')->with('success', 'Blog updated!');
    }


    public function destroy(Blog $blog)
    {
        $this->deleteFeaturedImage($blog->featured_image);

        $blog->delete();
        app(BlogSitemapService::class)->regenerate();

        return redirect()->route('admin.blogs.index')->with('success', 'Blog deleted!');
    }

    private function validatedBlogData(Request $request): array
    {
        $data = $request->validate([
            'title' => 'required|string|max:180',
            'slug' => 'nullable|string|max:180',
            'meta_title' => 'nullable|string|max:70',
            'meta_description' => 'nullable|string|max:180',
            'excerpt' => 'nullable|string|max:300',
            'primary_keyword' => 'nullable|string|max:120',
            'secondary_keywords' => 'nullable|string|max:500',
            'content' => 'required|string',
            'featured_image' => 'nullable|image',
            'status' => 'nullable',
        ]);

        $data['status'] = $request->boolean('status');
        $data['meta_keywords'] = trim(implode(', ', array_filter([
            $data['primary_keyword'] ?? '',
            $data['secondary_keywords'] ?? '',
        ])));

        return $data;
    }

    private function uniqueSlug(string $title, ?string $requested = null, ?int $ignoreId = null): string
    {
        $slug = Str::slug($requested ?: $title) ?: 'blog';
        $base = $slug;
        $i = 2;

        while (
            Blog::where('slug', $slug)
                ->when($ignoreId, fn ($query) => $query->where('id', '!=', $ignoreId))
                ->exists()
        ) {
            $slug = $base . '-' . $i;
            $i++;
        }

        return $slug;
    }

    private function normalizeHeadings(string $content): string
    {
        $content = preg_replace('/<h1(\b[^>]*)>/i', '<h2$1>', $content) ?? $content;

        return str_ireplace('</h1>', '</h2>', $content);
    }

    private function cleanRepeater($rows, array $required): array
    {
        if (! is_array($rows)) {
            return [];
        }

        $clean = [];
        foreach ($rows as $row) {
            if (! is_array($row)) {
                continue;
            }
            $item = [];
            foreach ($required as $key) {
                $item[$key] = trim((string) ($row[$key] ?? ''));
            }
            if (count(array_filter($item)) === count($required)) {
                $clean[] = $item;
            }
        }

        return $clean;
    }

    private function suggestedInternalLinks(): array
    {
        return [
            ['label' => 'Quran Reading with Tajweed', 'url' => route('quran.tajweed')],
            ['label' => 'Noorani Qaida for beginners', 'url' => route('quran.recitation')],
            ['label' => 'Quran Memorization (Hifz)', 'url' => route('quran.memorization')],
            ['label' => 'Tafseer course', 'url' => route('quran.tafseer')],
            ['label' => 'Kids Quran classes', 'url' => route('kids.classes')],
            ['label' => 'Pricing', 'url' => route('home.pricing')],
            ['label' => 'Meet our teachers', 'url' => route('teachers')],
            ['label' => '3-day free trial / Contact', 'url' => route('home.contact.us')],
        ];
    }

    private function cloudinaryConfigured(): bool
    {
        return filled(config('cloudinary.cloud_url'));
    }

    private function storeFeaturedImage($uploadedFile, int $blogId): string
    {
        if ($this->cloudinaryConfigured()) {
            try {
                $uploadResult = Cloudinary::upload($uploadedFile->getRealPath(), [
                    'folder' => 'blogs',
                    'public_id' => 'blog_' . $blogId . '_' . time(),
                ]);

                return $uploadResult->getSecurePath();
            } catch (\Throwable $e) {
                \Log::warning('Cloudinary upload failed, using local storage: ' . $e->getMessage());
            }
        }

        $extension = strtolower($uploadedFile->getClientOriginalExtension() ?: $uploadedFile->guessExtension() ?: 'jpg');
        $filename = 'blog_' . $blogId . '_' . time() . '_' . Str::random(8) . '.' . $extension;
        $relative = 'blogs/' . $filename;

        $publicDir = public_path('uploads/blogs');
        $storageDir = storage_path('app/public/blogs');

        foreach ([$publicDir, $storageDir] as $directory) {
            if (! is_dir($directory) && ! mkdir($directory, 0755, true) && ! is_dir($directory)) {
                throw new \RuntimeException('Unable to create blog image directory.');
            }
        }

        // Save into public/uploads so the image is web-accessible without a storage symlink.
        $uploadedFile->move($publicDir, $filename);
        $publicFile = $publicDir . DIRECTORY_SEPARATOR . $filename;

        if (is_file($publicFile)) {
            @copy($publicFile, $storageDir . DIRECTORY_SEPARATOR . $filename);
        }

        $this->ensureStorageLink();

        return $relative;
    }

    private function ensureStorageLink(): void
    {
        $link = public_path('storage');
        $target = storage_path('app/public');

        if (file_exists($link) || is_link($link)) {
            return;
        }

        try {
            if (function_exists('symlink')) {
                @symlink($target, $link);
            }
        } catch (\Throwable $e) {
            \Log::info('Could not create storage symlink: ' . $e->getMessage());
        }
    }

    private function deleteFeaturedImage(?string $path): void
    {
        if (! $path || preg_match('/^[A-Za-z]:[\\\\\\/]/', $path) || str_starts_with($path, '/tmp/')) {
            return;
        }

        if ($this->cloudinaryConfigured() && filter_var($path, FILTER_VALIDATE_URL)) {
            try {
                $publicId = $this->extractPublicIdFromUrl($path);
                if ($publicId) {
                    Cloudinary::destroy($publicId);
                }
            } catch (\Exception $e) {
                \Log::warning('Failed to delete Cloudinary image: ' . $e->getMessage());
            }

            return;
        }

        if (! filter_var($path, FILTER_VALIDATE_URL)) {
            $relative = ltrim(str_replace('\\', '/', $path), '/');
            foreach (['public/', 'storage/', 'uploads/'] as $prefix) {
                if (str_starts_with($relative, $prefix)) {
                    $relative = substr($relative, strlen($prefix));
                }
            }

            Storage::disk('public')->delete($relative);
            $publicUpload = public_path('uploads/' . $relative);
            if (is_file($publicUpload)) {
                @unlink($publicUpload);
            }
        }
    }

    /**
     * Extract public_id from Cloudinary URL
     */
    private function extractPublicIdFromUrl($url)
    {
        if (!filter_var($url, FILTER_VALIDATE_URL)) {
            return null;
        }

        try {
            $urlParts = parse_url($url);
            if (!isset($urlParts['path'])) {
                return null;
            }

            $pathParts = explode('/', trim($urlParts['path'], '/'));
            // Cloudinary URL format: /{cloud_name}/image/upload/v{version}/{public_id}.{ext}
            // Or: /{cloud_name}/image/upload/{transformations}/v{version}/{public_id}.{ext}
            // We need to find 'upload' and get everything after the version
            $uploadIndex = array_search('upload', $pathParts);
            if ($uploadIndex === false) {
                return null;
            }

            // Get everything after 'upload'
            $afterUpload = array_slice($pathParts, $uploadIndex + 1);
            
            // Find the version part (starts with 'v' followed by numbers)
            $versionIndex = null;
            foreach ($afterUpload as $index => $part) {
                if (preg_match('/^v\d+$/', $part)) {
                    $versionIndex = $index;
                    break;
                }
            }

            if ($versionIndex === null) {
                // No version found, might be a different URL format
                // Try to get everything after upload as public_id
                $publicIdParts = $afterUpload;
            } else {
                // Get everything after the version
                $publicIdParts = array_slice($afterUpload, $versionIndex + 1);
            }

            if (empty($publicIdParts)) {
                return null;
            }

            $publicId = implode('/', $publicIdParts);
            // Remove file extension
            $publicId = preg_replace('/\.[^.]*$/', '', $publicId);
            
            return $publicId;
        } catch (\Exception $e) {
            \Log::warning('Failed to extract public_id from URL: ' . $e->getMessage());
            return null;
        }
    }
}
