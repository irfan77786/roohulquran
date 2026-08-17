<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\AdminNotification;
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

        $blog = new Blog($validated);
        $blog->save();

        if ($request->hasFile('featured_image')) {
            $blog->featured_image = $this->storeFeaturedImage($request->file('featured_image'), $blog->id);
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

        // Update blog details
        $blog->update($validated);

        if ($request->hasFile('featured_image')) {
            $this->deleteFeaturedImage($blog->featured_image);
            $blog->featured_image = $this->storeFeaturedImage($request->file('featured_image'), $blog->id);
            $blog->save();
        }

        return redirect()->route('admin.blogs.index')->with('success', 'Blog updated!');
    }


    public function destroy(Blog $blog)
    {
        $this->deleteFeaturedImage($blog->featured_image);

        $blog->delete();
        return redirect()->route('admin.blogs.index')->with('success', 'Blog deleted!');
    }

    private function cloudinaryConfigured(): bool
    {
        return filled(config('cloudinary.cloud_url'));
    }

    private function storeFeaturedImage($uploadedFile, int $blogId): string
    {
        if ($this->cloudinaryConfigured()) {
            $uploadResult = Cloudinary::upload($uploadedFile->getRealPath(), [
                'folder' => 'blogs',
                'public_id' => 'blog_' . $blogId . '_' . time(),
            ]);

            return $uploadResult->getSecurePath();
        }

        return $uploadedFile->store('blogs', 'public');
    }

    private function deleteFeaturedImage(?string $path): void
    {
        if (! $path) {
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
            Storage::disk('public')->delete($path);
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
