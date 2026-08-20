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
        return view('admin.blog.index', compact('blogs'));
    }

    public function create()
    {
        return view('admin.blog.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string',
            'content' => 'required',
            'featured_image' => 'nullable|image',
            'seo' => 'nullable|array',

        ]);

        $validated['slug'] = Str::slug($request->title);
        $validated['author'] = auth()->user()->name;
        $imageFile = $request->file('featured_image');
        unset($validated['featured_image']);

        $blog = new Blog($validated);
        $blog->save();

        if ($imageFile) {
            $blog->featured_image = $this->storeFeaturedImage($imageFile, $blog->id);
            $blog->save();
        }

        // Create notification
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


    public function edit(Blog $blog)
    {
        return view('admin.blog.create', compact('blog'));
    }
    public function update(Request $request, Blog $blog)
    {
        $validated = $request->validate([
            'title' => 'required|string',
            'content' => 'required',
            'featured_image' => 'nullable|image',
            'seo' => 'nullable|array',
        ]);

        $validated['slug'] = Str::slug($request->title);
        $validated['author'] = auth()->user()->name;
        $imageFile = $request->file('featured_image');
        unset($validated['featured_image']);

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
